<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FbPage;
use App\Model\TwakTo;

class FbPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
    {
        $fbpage=FbPage::first();
        return view('admin.social.fb_page',compact('fbpage'));
    }

    public function update(Request $request, $id)
    {
        $social=FbPage::first();
        $social->name = $request->name;
        $social->link = $request->link;
        $social->save();
        $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);
       }

    public function editTwakTo()
    {
        $twak_to=TwakTo::first();
        return view('admin.social.twak_to',compact('twak_to'));
    }

    public function updateTwakTo(Request $request, $id)
    {
        $twak_to=TwakTo::first();
        $twak_to->twak_to = $request->twak_to;
        $twak_to->save();
        $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);
       }
}
