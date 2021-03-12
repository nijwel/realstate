<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slider;
use Image;

class SliderController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth:admin');
   }

   public function index()
   {
   	  $slider=Slider::all();
   	  return view('admin.slider.all_slider',compact('slider'))->with('no',1);
   }

   public function store(Request $request)
   {
   		$image_one=$request->file('image');
   		if ($image_one) {
            $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
            Image::make($image_one)->resize(1920,740)->save('public/backend/images/slider/'.$imageNameOne);  
            $upload_image_one='public/backend/images/slider/'.$imageNameOne;

   			$slider=new Slider;
   			$slider->title = $request->title;
   			$slider->image = $upload_image_one;
   			$slider->description = $request->description;
   			$slider->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->back()->with($notification);
	   		}
   }

   public function edit($id)
   {
   	   $slider=Slider::findorfail($id);
   	   return view('admin.slider.edit_slider',compact('slider'));
   }

   public function update(Request $request, $id)
   {
   		$image_one=$request->file('image');
   		if ($image_one) {
            $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
            Image::make($image_one)->resize(1920,740)->save('public/backend/images/slider/'.$imageNameOne);  
            $upload_image_one='public/backend/images/slider/'.$imageNameOne;

   			$slider=Slider::findorfail($id);
   				$old_image=$slider->image;
   				unlink($old_image);
   			$slider->title = $request->title;
   			$slider->image = $upload_image_one;
   			$slider->description = $request->description;
   			$slider->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->route('all.slider')->with($notification);
	   		}else{
	   			$slider=Slider::findorfail($id);
	   			$slider->title = $request->title;
	   			$slider->description = $request->description;
	   			$slider->save();
	   			$notification = array(
	           'messege' =>'Successfully Done!',
	           'alert-type'=>'success'
		        );
		        return redirect()->route('all.slider')->with($notification);
	   		}
   }

   public function delete($id)
   {
      $slider=Slider::findorfail($id);
         $old_image=$slider->image;
         unlink($old_image);
      $slider->delete();
      $notification = array(
              'messege' =>'Successfully Done!',
              'alert-type'=>'success'
              );
              return redirect()->back()->with($notification);
   }
}
