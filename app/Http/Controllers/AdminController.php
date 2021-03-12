<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use Auth;
use Hash;
use Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard()
    {
        return view('admin.home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('admin/login');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function edit_profile()
    {   
        $profile=DB::table('admins')->first();
        return view('admin.edit_profile',compact('profile'));
        // return response()->json($profile);
    }

    public function update_profile(Request $request)
    {
        $id=Auth::user()->id;

        $image = $request->file('image');
        if ($image) {

            $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
            Image::make($image)->resize(600,600)->save('public/backend/images/admin_profile/'.$imageName);   
            $upload_image='public/backend/images/admin_profile/'.$imageName;

            if ($request->old_image) {
                unlink($request->old_image);
            }else{

            }
            $profile=Admin::findorfail(Auth::id());
            $profile->name=$request->name;
            $profile->designation=$request->designation;
            $profile->mobile=$request->mobile;
            $profile->image=$upload_image;
            $profile->save();

            $notification = array(
                'messege' =>'Successfully Post Updated',
                'alert-type'=>'success'
             );

            return redirect()->route('admin.profile')->with($notification);
        }else{
            $profile=Admin::findorfail(Auth::id());
            $profile->name=$request->name;
            $profile->designation=$request->designation;
            $profile->mobile=$request->mobile;
            $profile->save();
            $notification = array(
                'messege' =>'Successfully Post Updated',
                'alert-type'=>'success'
             );
            return redirect()->route('admin.profile')->with($notification);
        }
    }

    public function change_password()
    {
        return view('admin.auth.password_change');
    }

    public function update_password(Request $request)
    {   
        $validatedData = $request->validate([
            'password' => 'required|min:6',
        ]);

        $password=Auth::user()->password;
                $oldpass=$request->oldpass;
                $newpass=$request->password;
                $confirm=$request->password_confirmation;
                if (Hash::check($oldpass,$password)) {
                     if ($newpass === $confirm) {
                                $user=Admin::find(Auth::id());
                                $user->password=Hash::make($request->password);
                                $user->save();
                                Auth::logout();  
                                $notification=array(
                                  'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                                  'alert-type'=>'success'
                                   );
                                 return Redirect()->route('admin.login')->with($notification); 
                           }else{
                               $notification=array(
                                  'messege'=>'New password and Confirm Password not matched!',
                                  'alert-type'=>'error'
                                   );
                                 return Redirect()->back()->with($notification);
                           }     
                }else{
                  $notification=array(
                          'messege'=>'Old Password not matched!',
                          'alert-type'=>'error'
                           );
                         return Redirect()->back()->with($notification);
                }
    }
}
