<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Testimonial;
use Image;

class TestimonialController extends Controller
{
       public function __construct()
       {
          $this->middleware('auth:admin');
       }

       public function index()
       {
       	  $testimonial=Testimonial::all();
       	  return view('admin.testimonial.all_testimonial',compact('testimonial'))->with('no',1);
       }

       public function add()
       {
          return view('admin.testimonial.add_testimonial');
       }

       public function store(Request $request)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(80,80)->save('public/backend/images/testimonial/'.$imageNameOne);  
                $upload_image_one='public/backend/images/testimonial/'.$imageNameOne;

       			$testimonial=new Testimonial;
       			$testimonial->name = $request->name;
       			$testimonial->image = $upload_image_one;
       			$testimonial->details = $request->details;
       			$testimonial->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->back()->with($notification);
    	   		}
       }

       public function edit($id)
       {
       	   $testimonial=Testimonial::findorfail($id);
       	   return view('admin.testimonial.edit_testimonial',compact('testimonial'));
       }

       public function update(Request $request, $id)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(80,80)->save('public/backend/images/testimonial/'.$imageNameOne);  
                $upload_image_one='public/backend/images/testimonial/'.$imageNameOne;

       			$testimonial=Testimonial::findorfail($id);
       				$old_image=$testimonial->image;
       				unlink($old_image);
       			$testimonial->name = $request->name;
       			$testimonial->image = $upload_image_one;
       			$testimonial->details = $request->details;
       			$testimonial->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->route('all.testimonial')->with($notification);
    	   		}else{
    	   			$testimonial=Testimonial::findorfail($id);
    	   			$testimonial->name = $request->name;
    	   			$testimonial->details = $request->details;
    	   			$testimonial->save();
    	   			$notification = array(
    	           'messege' =>'Successfully Done!',
    	           'alert-type'=>'success'
    		        );
    		        return redirect()->route('all.testimonial')->with($notification);
    	   		}
       }

       public function delete($id)
       {
          $testimonial=Testimonial::findorfail($id);
             $old_image=$testimonial->image;
             unlink($old_image);
          $testimonial->delete();
          $notification = array(
                  'messege' =>'Successfully Done!',
                  'alert-type'=>'success'
                  );
                  return redirect()->back()->with($notification);
       }
}
