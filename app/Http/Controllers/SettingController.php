<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactInfo;
use App\Model\Logo;
use Image;
use DB;

class SettingController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:admin');
   }

   public function edit()
   {
   		$contact_info=ContactInfo::first();
   		return view('admin.contact_info.contact_info',compact('contact_info'));
   }

   public function update(Request $request, $id)
   {
   		$contact_info=ContactInfo::first();
   		$contact_info->address = $request->address;
   		$contact_info->email = $request->email;
   		$contact_info->mobile = $request->mobile;
         $contact_info->map = $request->map;
   		$contact_info->save();
   		$notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);

   }

   public function Logoedit()
   {
   		$logo=Logo::first();
   		return view('admin.logo.logo',compact('logo'));
   }

   public function Logoupdate(Request $request,$id)
   {
   				$image_one = $request->file('top_logo');
   				$image_two = $request->file('footer_logo');

   		     if ($image_one && $image_two ) {

   		         $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();   
   		         $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();   
   		         Image::make($image_one)->resize(320,83)->save('public/backend/images/logo/'.$imageNameOne);   
   		         Image::make($image_two)->resize(320,83)->save('public/backend/images/logo/'.$imageNameTwo);   
   		         $upload_image_one='public/backend/images/logo/'.$imageNameOne;
   		         $upload_image_two='public/backend/images/logo/'.$imageNameTwo;


   		         $logo=Logo::findorfail($id);
   		         	// $old_log_one=$logo->top_logo;
   		         	// $old_log_two=$logo->footer_logo;
   		         	// unlink($old_log_one);
   		         	// unlink($old_log_two);
   		         $logo->top_logo = $upload_image_one;
   		         $logo->footer_logo = $upload_image_two;
   		         $logo->save();
   		         $notification = array(
		           'messege' =>'Successfully SEO Updated',
		           'alert-type'=>'success'
		        );
		        return redirect()->back()->with($notification);
   		     }elseif ($image_one) {

   		     	$imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
   		     	Image::make($image_one)->resize(320,83)->save('public/backend/images/logo/'.$imageNameOne);     
   		     	$upload_image_one='public/backend/images/logo/'.$imageNameOne;

   		     	$logo=Logo::findorfail($id);
   		     	    // $old_log_one=$logo->top_logo;
   		     	    // unlink($old_log_one);
   		     	$logo->top_logo = $upload_image_one;
   		     	$logo->save();
   		         $notification = array(
		           'messege' =>'Successfully SEO Updated',
		           'alert-type'=>'success'
		        );
		        return redirect()->back()->with($notification);
   		     }elseif ($image_two) {

   		     	$imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();      
   		     	Image::make($image_two)->resize(320,83)->save('public/backend/images/logo/'.$imageNameTwo);     
   		     	$upload_image_two='public/backend/images/logo/'.$imageNameTwo;

   		     	$logo=Logo::findorfail($id);
      		     	// $old_log_two=$logo->footer_logo;
      		     	// unlink($old_log_two);
   		     	$logo->footer_logo = $upload_image_two;
   		     	$logo->save();
   		         $notification = array(
		           'messege' =>'Successfully SEO Updated',
		           'alert-type'=>'success'
		        );
		        return redirect()->back()->with($notification);
		    }
   }


   public function editcopyright()
   {
         $copyright=DB::table('copyrights')->first();
         return view('admin.copy_right.copy_right',compact('copyright'));
   }

   public function updatecopyright(Request $request, $id)
   {
         DB::table('copyrights')->update([
             'copyright' => $request->copyright,
         ]);
         $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);

   }


}
