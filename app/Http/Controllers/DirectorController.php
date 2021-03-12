<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Director;
Use Image;

class DirectorController extends Controller
{
        public function __construct()
       {
          $this->middleware('auth:admin');
       }

       public function index()
       {
       	  $director=Director::all();
       	  return view('admin.director.all_director',compact('director'))->with('no',1);
       }

       public function store(Request $request)
       {  
          $validatedData = $request->validate([
                 'phone' => 'required|unique:directors|max:11',
                 'email' => 'required|unique:directors|max:244',
              ]);

       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(329,230)->save('public/backend/images/director/'.$imageNameOne);  
                $upload_image_one='public/backend/images/director/'.$imageNameOne;

       			$director=new Director;
       			$director->name = $request->name;
            $director->name_slug = preg_replace('/\s+/u', '-', trim($request->name));
       			$director->designation = $request->designation;
       			$director->phone = $request->phone;
       			$director->email = $request->email;
       			$director->address = $request->address;
       			$director->image = $upload_image_one;
       			$director->details = $request->details;
       			$director->facebook = $request->facebook;
       			$director->twitter = $request->twitter;
       			$director->linkedin = $request->linkedin;
       			$director->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->back()->with($notification);
    	   		}
       }

       public function edit($id)
       {
       	   $director=Director::findorfail($id);
       	   return view('admin.director.edit_director',compact('director'));
       }

       public function update(Request $request, $id)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(329,230)->save('public/backend/images/director/'.$imageNameOne);  
                $upload_image_one='public/backend/images/director/'.$imageNameOne;

       			$director=Director::findorfail($id);
       				$old_image=$director->image;
       				unlink($old_image);
       			$director->name = $request->name;
            $director->name_slug = preg_replace('/\s+/u', '-', trim($request->name));
       			$director->designation = $request->designation;
       			$director->phone = $request->phone;
       			$director->email = $request->email;
       			$director->address = $request->address;
       			$director->image = $upload_image_one;
       			$director->details = $request->details;
       			$director->facebook = $request->facebook;
       			$director->twitter = $request->twitter;
       			$director->linkedin = $request->linkedin;
       			$director->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->route('all.director')->with($notification);
    	   		}else{
    	   			$director=Director::findorfail($id);
    	   			$director->name = $request->name;
              $director->name_slug = preg_replace('/\s+/u', '-', trim($request->name));
    	   			$director->designation = $request->designation;
    	   			$director->phone = $request->phone;
    	   			$director->email = $request->email;
    	   			$director->address = $request->address;
    	   			$director->details = $request->details;
    	   			$director->facebook = $request->facebook;
    	   			$director->twitter = $request->twitter;
    	   			$director->linkedin = $request->linkedin;
    	   			$director->save();
    	   			$notification = array(
    	           'messege' =>'Successfully Done!',
    	           'alert-type'=>'success'
    		        );
    		        return redirect()->route('all.director')->with($notification);
    	   		}
       }

       public function delete($id)
       {
          $director=Director::findorfail($id);
             $old_image=$director->image;
             unlink($old_image);
          $director->delete();
          $notification = array(
                  'messege' =>'Successfully Done!',
                  'alert-type'=>'success'
                  );
                  return redirect()->back()->with($notification);
       }
}
