<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Inbox;
class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function alldelete()
    {
    	$checked = Request::input('checked',[]);
    	foreach ($checked as $id) {
    	        Inbox::where("id",$id)->delete();
    	   }
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }
}
