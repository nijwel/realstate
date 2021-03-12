<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServiceCategory;

class ServiceTypeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$servicetype=ServiceCategory::all();
    	return view('admin.service_type.all_service_type',compact('servicetype'))->with('no',1);
    }

    public function store(Request $request)
    {	
    	$validatedData = $request->validate([
    	       'service_name' => 'required|unique:service_categories|max:255',
    	    ]);

        $servicetype= new ServiceCategory;
        $servicetype->service_name=$request->service_name;
        $servicetype->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$servicetype=ServiceCategory::findorfail($id);
    	return view('admin.service_type.edit_service_type',compact('servicetype'));
    }

    public function update(Request $request, $id)
    {
    	
        $servicetype=ServiceCategory::findorfail($id);
        $servicetype->service_name=$request->service_name;
        $servicetype->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->route('all.service_type')->with($notification);

        
    }

    public function delete($id)
    {
    	$servicetype=ServiceCategory::findorfail($id);
    	$servicetype->delete();
    	$notification = array(
    	    'messege' =>'Successfully Category Saved',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }
}
