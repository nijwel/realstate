<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Social;

class SocialController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
    {
        $social=Social::first();
        return view('admin.social.social',compact('social'));
    }

    public function update(Request $request, $id)
    {
        $social=Social::first();
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->linkedin = $request->linkedin;
        $social->youtube = $request->youtube;
        $social->save();
        $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);
       }
        
}
