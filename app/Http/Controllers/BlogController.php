<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BlogCategory;
use App\Model\Blog;
use Image;
use DB;

class BlogController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$blog=DB::table('blogs')
    				->join('blog_categories','blogs.category_id','blog_categories.id')
    				->select('blogs.*','blog_categories.category_name')
    				->get();
    	return view('admin.blog.all_blog',compact('blog'))->with('no',1);
    }

    public function create()
    {	
    	$blogcategory=BlogCategory::all();

    	return view('admin.blog.add_blog',compact('blogcategory'));
    }

    public function store(Request $request)
    {	
    		$image = $request->file('image');
         	if ($image) {

             $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
             Image::make($image)->resize(800,350)->save('public/backend/images/blog/'.$imageName);   
             $upload_image='public/backend/images/blog/'.$imageName;

	        $blog=new Blog;
	        $blog->title = $request->title;
	        $blog->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
	        $blog->category_id = $request->category_id;
	        $blog->details = $request->details;
	        $blog->date = date('M d Y');
	        $blog->image=$upload_image;
	        $blog->save();
	        $notification = array(
	            'messege' =>'Successfully Done!',
	            'alert-type'=>'success'
	         );
	         return redirect()->back()->with($notification);
	       }

    }

    public function edit($id)
    {
    	$blogcategory=BlogCategory::all();
    	$blog=Blog::findorfail($id);
    	return view('admin.blog.edit_blog',compact('blogcategory','blog'));

    }

    public function update(Request $request, $id)
    {
    		$image = $request->file('image');
         	if ($image) {

             $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
             Image::make($image)->resize(800,350)->save('public/backend/images/blog/'.$imageName);   
             $upload_image='public/backend/images/blog/'.$imageName;

	        $blog=Blog::findorfail($id);
	        	$old_image=$blog->image;
	        	unlink($old_image);
	        $blog->title = $request->title;
	        $blog->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
	        $blog->category_id = $request->category_id;
	        $blog->details = $request->details;
	        $blog->date = date('M d Y');
	        $blog->image=$upload_image;
	        $blog->save();
	        $notification = array(
	            'messege' =>'Successfully Done!',
	            'alert-type'=>'success'
	         );
	         return redirect()->route('all.blog')->with($notification);
	       }else{
	       	$blog=Blog::findorfail($id);
	        $blog->title = $request->title;
	        $blog->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
	        $blog->category_id = $request->category_id;
	        $blog->details = $request->details;
	        $blog->date = date('M d Y');
	        $blog->save();
	        $notification = array(
	            'messege' =>'Successfully Done!',
	            'alert-type'=>'success'
	         );
	         return redirect()->route('all.blog')->with($notification);
	       }
    }

    public function delete($id)
    {
    	$blog=Blog::findorfail($id);
        	$old_image=$blog->image;
        	unlink($old_image);
	    $blog->delete();
	    $notification = array(
	            'messege' =>'Successfully Done!',
	            'alert-type'=>'success'
	         );
	    return redirect()->back()->with($notification);
    }
}
