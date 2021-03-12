<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Messege;

class MessegeController extends Controller
{
    	public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function unread()
    {
        $messege=Messege::where('status',0)->orderBy('id','DESC')->get();
        return view('admin.messege.unread_messege',compact('messege'))->with('no',1);
    }

     public function read()
    {
        $messege=Messege::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.messege.read_messege',compact('messege'))->with('no',1);
    }

     public function show($id)
    {   $messege=Messege::where('id',$id)->update(['messeges.status'=>1]);
        $messege= Messege::leftjoin('properties','messeges.title','properties.id')
                        ->select('messeges.*','properties.*')
                        ->findorfail($id);
        return view('admin.messege.show_messege',compact('messege'));
    }

    public function delete($id)
    {
       $messege=Messege::findorfail($id);
       $messege->delete();
       $notification = array(
            'messege' =>'Successfully Messege Deleted',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }
}
