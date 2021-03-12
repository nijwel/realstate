<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$category=Category::all();
    	return view('admin.category.all_category',compact('category'))->with('no',1);
    }

    public function store(Request $request)
    {	
    	$validatedData = $request->validate([
    	       'category_name' => 'required|unique:categories|max:255',
    	    ]);

        $category= new Category;
        $category->category_name=$request->category_name;
        $category->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$category=Category::findorfail($id);
    	return view('admin.category.edit_category',compact('category'));
    }

    public function update(Request $request, $id)
    {
    	
        $category=Category::findorfail($id);
        $category->category_name=$request->category_name;
        $category->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->route('all.category')->with($notification);

        
    }

    public function delete($id)
    {
    	$category=Category::findorfail($id);
    	$category->delete();
    	$notification = array(
    	    'messege' =>'Successfully Category Saved',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }
}
