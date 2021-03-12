<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Size;
class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {   
        $size=Size::all();

        return view('admin.size.all_size',compact('size'))->with('no',1);
    }

    public function store(Request $request)
    {
    	$size= new Size;
    	$size->size = $request->size;
    	$size->save();
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }

    public function edit($id)
    {   
        $size=Size::findorfail($id);

        return view('admin.size.edit_size',compact('size'));
    }

    public function update(Request $request , $id)
    {
    	$size=Size::findorfail($id);
    	$size->size = $request->size;
    	$size->save();
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->route('all.size')->with($notification);
    }

    public function delete($id)
   {
      $size=Size::findorfail($id);
      $size->delete();
      $notification = array(
              'messege' =>'Successfully Done!',
              'alert-type'=>'success'
              );
              return redirect()->back()->with($notification);
   }
}
