<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Hash;
use Image;
class RolePlayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {	
    	$user=Admin::where('type',0)->get();
    	return view('admin.role_play.all_user',compact('user'))->with('no',1);
    }

    public function create()
    {
        return view('admin.role_play.add_user');
    }

    public function store(Request $request)
    {	
    	$validatedData = $request->validate([
    	       'email' => 'required|unique:admins|max:255',
    	       'mobile' => 'required|unique:admins|max:14',
    	    ]);

    	$image=$request->file('image');

    	if ($image) {
    		$ImageName=uniqid().'.'.$image=getClientOriginialExtension();
    		Image::make($image)->resize(215,215)->save('public/backend/images/admin_profile/'.$imageName);
    		$upload_image='public/backend/images/admin_profile/'.$imageName;

    		$user=new Admin;
   			$user->name = $request->name;
   			$user->email = $request->email;
   			$user->mobile = $request->mobile;
   			$user->designation = $request->designation;
   			$user->password = Hash::make($request->password);
   			$user->image = $upload_image;
   			$user->home = $request->home;
   			$user->c_proposal = $request->c_proposal;
   			$user->p_setting = $request->p_setting;
   			$user->property = $request->property;
   			$user->about_us = $request->about_us;
   			$user->blog = $request->blog;
   			$user->service = $request->service;
   			$user->messege = $request->messege;
   			$user->setting = $request->setting;
   			$user->seo = $request->seo;
   			$user->role_play = $request->role_play;
   			$user->type = 0;
   			$user->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->back()->with($notification);
    	}else{
    		$user=new Admin;
   			$user->name = $request->name;
   			$user->email = $request->email;
   			$user->mobile = $request->mobile;
   			$user->designation = $request->designation;
   			$user->password = Hash::make($request->password);
   			$user->home = $request->home;
   			$user->c_proposal = $request->c_proposal;
   			$user->p_setting = $request->p_setting;
   			$user->property = $request->property;
   			$user->about_us = $request->about_us;
   			$user->blog = $request->blog;
   			$user->service = $request->service;
   			$user->messege = $request->messege;
   			$user->setting = $request->setting;
   			$user->seo = $request->seo;
   			$user->role_play = $request->role_play;
   			$user->type = 0;
   			$user->save();
   			$notification = array(
           'messege' =>'Successfully Done!',
           'alert-type'=>'success'
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($id)
    {	
    	$user=Admin::findorfail($id);
    	return view('admin.role_play.edit_user',compact('user'));
    }

    public function update(Request $request, $id)
    {
    	$user=Admin::findorfail($id);
		$user->designation = $request->designation;
		$user->home = $request->home;
		$user->c_proposal = $request->c_proposal;
		$user->p_setting = $request->p_setting;
		$user->property = $request->property;
		$user->about_us = $request->about_us;
		$user->blog = $request->blog;
		$user->service = $request->service;
		$user->messege = $request->messege;
		$user->setting = $request->setting;
		$user->seo = $request->seo;
		$user->role_play = $request->role_play;
		$user->save();
		$notification = array(
		   'messege' =>'Successfully Done!',
		   'alert-type'=>'success'
		    );
		    return redirect()->route('all.user')->with($notification);
    }

    public function delete($id)
    {
    	$user=Admin::findorfail($id);
    	 $old_image = $user->image;
    	 if ($old_image) {
    	 	unlink($old_image);
    	 }else{

    	 }
    	$user->delete();
    	$notification = array(
		   'messege' =>'Successfully Done!',
		   'alert-type'=>'success'
		    );
		    return redirect()->back()->with($notification);
    }
}
