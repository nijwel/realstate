<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Popular_place;
use Image;
class PopularPlaceController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:admin');
   } 

   public function index()
   {
   		$popularplace=Popular_place::all();
   		return view('admin.popular_place.all_popular_place',compact('popularplace'))->with('no',1);
   }

   public function store(Request $request)
   {
   		$image_one=$request->file('image');
   		if ($image_one) {
            $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
            Image::make($image_one)->resize(1080,540)->save('public/backend/images/popular_place/'.$imageNameOne);  
            $upload_image_one='public/backend/images/popular_place/'.$imageNameOne;

   			$popularplace=new Popular_place;
   			$popularplace->name = $request->name;
        $popularplace->slug = preg_replace('/\s+/u', '-', trim($request->name));
   			$popularplace->image = $upload_image_one;
        $popularplace->popular_place = $request->popular_place;
        $popularplace->status = 1;
   			$popularplace->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->back()->with($notification);
	   		}
   }

   public function edit($id)
   {
   	   $popularplace=Popular_place::findorfail($id);
   	   return view('admin.popular_place.edit_popular_place',compact('popularplace'));
   }

   public function update(Request $request, $id)
   {
   		$image_one=$request->file('image');
   		if ($image_one) {
            $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
            Image::make($image_one)->resize(1080,540)->save('public/backend/images/popular_place/'.$imageNameOne);  
            $upload_image_one='public/backend/images/popular_place/'.$imageNameOne;

   			$popularplace=Popular_place::findorfail($id);
   				$old_image=$popularplace->image;
   				unlink($old_image);
   			$popularplace->name = $request->name;
        $popularplace->slug = preg_replace('/\s+/u', '-', trim($request->name));
   			$popularplace->image = $upload_image_one;
        $popularplace->popular_place = $request->popular_place;
        $popularplace->status = 1;
   			$popularplace->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->route('all.popular_place')->with($notification);
	   		}else{
	   			$popularplace=Popular_place::findorfail($id);
	   			$popularplace->name = $request->name;
	   			$popularplace->slug = preg_replace('/\s+/u', '-', trim($request->name));
          $popularplace->popular_place = $request->popular_place;
          $popularplace->status = 1;
	   			$popularplace->save();
	   			$notification = array(
	           'messege' =>'Successfully Done!',
	           'alert-type'=>'success'
		        );
		        return redirect()->route('all.popular_place')->with($notification);
	   		}
   }

   public function active($id)
   {
       $property=Popular_place::findorfail($id);
       $property->where('id',$id)->update(['status' => 0]);
       $notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
   }

   public function deactive($id)
   {
       $property=Popular_place::findorfail($id);
       $property->where('id',$id)->update(['status' => 1]);
       $notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
   }

   public function delete($id)
   {
      $popularplace=Popular_place::findorfail($id);
         $old_image=$popularplace->image;
         unlink($old_image);
      $popularplace->delete();
      $notification = array(
              'messege' =>'Successfully Done!',
              'alert-type'=>'success'
              );
              return redirect()->back()->with($notification);
   }
}
