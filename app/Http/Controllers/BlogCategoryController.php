<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BlogCategory;

class BlogCategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$blogcategory=BlogCategory::all();
    	return view('admin.blog_category.all_blog_category',compact('blogcategory'))->with('no',1);
    }

    public function store(Request $request)
    {	
    	$validatedData = $request->validate([
    	       'category_name' => 'required|unique:blog_categories|max:255',
    	    ]);

        $blogcategory= new BlogCategory;
        $blogcategory->category_name=$request->category_name;
        $blogcategory->category_slug = preg_replace('/\s+/u', '-', trim($request->category_name));
        $blogcategory->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$blogcategory=BlogCategory::findorfail($id);
    	return view('admin.blog_category.edit_blog_category',compact('blogcategory'));
    }

    public function update(Request $request, $id)
    {
    	
        $blogcategory=BlogCategory::findorfail($id);
        $blogcategory->category_name=$request->category_name;
        $blogcategory->category_slug = preg_replace('/\s+/u', '-', trim($request->category_name));
        $blogcategory->save();
        $notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->route('all.blog_category')->with($notification);

        
    }

    public function delete($id)
    {
    	$blogcategory=BlogCategory::findorfail($id);
    	$blogcategory->delete();
    	$notification = array(
    	    'messege' =>'Successfully Category Saved',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }
}
