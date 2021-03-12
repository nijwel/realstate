<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Seo;
use Image;
class SeoController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:admin');
   }

   public function edit()
   {
       $seo=Seo::first();
       return view('admin.seo.edit_seo',compact('seo'));
   }

   public function update(Request $request, $id)
   {	
   		$image = $request->file('meta_icon');
        if ($image) {

            $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
            Image::make($image)->resize(32,32)->save('public/backend/images/icon/'.$imageName);   
            $upload_image='public/backend/images/icon/'.$imageName;

       $seo=Seo::findorfail($id);
       		// $old_image=$seo->meta_icon;
       		// unlink($old_image);
       $seo->meta_title = $request->meta_title;
       $seo->meta_author = $request->meta_author;
       $seo->meta_description = $request->meta_description;
       $seo->meta_keyword = $request->meta_keyword;
       $seo->google_verification = $request->google_verification;
       $seo->being_verification = $request->being_verification;
       $seo->google_analytic = $request->google_analytic;
       $seo->alexa_analytic = $request->alexa_analytic;
       $seo->meta_icon=$upload_image;
       $seo->save();
       $notification = array(
           'messege' =>'Successfully SEO Updated',
           'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
      }else{
       $seo=Seo::first();
       $seo->meta_title = $request->meta_title;
       $seo->meta_author = $request->meta_author;
       $seo->meta_description = $request->meta_description;
       $seo->meta_keyword = $request->meta_keyword;
       $seo->google_verification = $request->google_verification;
       $seo->being_verification = $request->being_verification;
       $seo->google_analytic = $request->google_analytic;
       $seo->alexa_analytic = $request->alexa_analytic;
       $seo->save();
       $notification = array(
           'messege' =>'Successfully SEO Updated',
           'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
      }
       
   }
}
