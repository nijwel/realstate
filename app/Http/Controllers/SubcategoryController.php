<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Subcategory;
use App\Model\Category;
use DB;

class SubcategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$subcategory=SubCategory::all();
    	return view('admin.subcategory.all_subcategory',compact('subcategory'))->with('no',1);
    }

    public function store(Request $request)
    {	
    	$validatedData = $request->validate([
    	       'subcategory_name' => 'required|unique:subcategories|max:255',
    	    ]);

        $subcategory= new Subcategory;
        $subcategory->subcategory_name=$request->subcategory_name;
        $subcategory->type_slug = preg_replace('/\s+/u', '-', trim($request->subcategory_name));
        $subcategory->save();
        $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {	
    	$category=Category::all();
    	$subcategory=Subcategory::findorfail($id);
    	return view('admin.subcategory.edit_subcategory',compact('subcategory','category'));
    }

    public function update(Request $request, $id)
    {
    	
        $subcategory=Subcategory::findorfail($id);
        $subcategory->subcategory_name=$request->subcategory_name;
        $subcategory->type_slug = preg_replace('/\s+/u', '-', trim($request->subcategory_name));
        $subcategory->save();
        $notification = array(
            'messege' =>'Successfully Done!',
            'alert-type'=>'success'
         );
        return redirect()->route('all.subcategory')->with($notification);

        
    }

    public function delete($id)
    {
    	$subcategory=Subcategory::findorfail($id);
    	$subcategory->delete();
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }
}
