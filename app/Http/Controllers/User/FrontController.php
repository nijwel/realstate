<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BlogCategory;
use App\Model\Category;
use App\Model\Subcategory;
use App\Model\Popular_place;
use App\Model\Messege;
use App\Model\Service;
use App\Model\Property;
use App\Model\Director;
use App\Model\Blog;
use App\Model\Proposal;
use App\Model\Size;
use DB;
use Image;
class FrontController extends Controller
{
    public function contact()
    {
    	return view('user.contact');
    }

//------ Blog--------//
    public function allblog()
    {   
        $blogcategory=BlogCategory::all();
    	return view('user.blog.all_blog',compact('blogcategory'));
    }

    public function singleblog($title_slug)
    {	
    	$blogcategory=BlogCategory::all();
    	$blog=DB::table('blogs')
                    ->join('blog_categories','blogs.category_id','blog_categories.id')
                    ->select('blogs.*','blog_categories.category_name')
                    ->where('blogs.title_slug',$title_slug)->first();
    	return view('user.blog.single_blog',compact('blog','blogcategory'));
    }

    public function SearchBlog(Request $request)
    {
       $keyword=$request->search;
       $blogcategory=BlogCategory::all();
       $search_blog = DB::table('blogs')
            ->join('blog_categories','blogs.category_id','blog_categories.id')
            ->select('blogs.*','blog_categories.category_name')
            ->where('title', 'like', '%' . $keyword . '%')
            ->get(); 
            if (count( $search_blog) <1) {
                return view('user.empty_search');
               
            }else{
                return view('user.blog.search_result',compact('search_blog','blogcategory')); 
            }

          
    }

    public function categoryblog($category_slug)
    {   
        $blogcategory=BlogCategory::all();
        $category=BlogCategory::where('category_slug',$category_slug)->first();
        $category_blog=Blog::leftjoin('blog_categories','blogs.category_id','blog_categories.id')
                        ->select('blogs.*','blog_categories.category_name')
                        ->where('category_slug',$category_slug)->orderBy('id','DESC')->Paginate();
        return view('user.blog.category_wise_blog',compact('category_blog','blogcategory','category'));
    }

//-----End Blog---------//


//-----Contact---------//

    public function send(Request $request)
    {   
        $validatedData = $request->validate([
               'name' => 'required|:messeges|max:255',
               'phone' => 'required|:messeges|max:15',
               'messege' => 'required|:messeges|max:99999',
            ]);
        $messege=new Messege;
        $messege->title = $request->title;
        $messege->name = $request->name;
        $messege->phone = $request->phone;
        $messege->email = $request->email;
        $messege->subject = $request->subject;
        $messege->messege = $request->messege;
        $messege->status = 0;
        $messege->save();
        $notification = array(
                'messege' =>'Successfully Messege Send! Thank You ',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
    }

//----End Contact----//

//----Nav Bar------//

    public function team()
    {
        return view('user.team');
    }

    public function mission()
    {
        return view('user.mission');
    }

    public function clint()
    {
        return view('user.clint');
    }

    public function story()
    {
        return view('user.story');
    }

    public function ongoing()
    {
        return view('user.project.ongoing');
    }

    public function upcoming()
    {
        return view('user.project.upcoming');
    }

    public function complete()
    {
        return view('user.project.complete');
    }


    //------End Nav Bar----//

    //------Director-------//

    public function director()
    {
        return view('user.director.director');
    }

    public function DirectorComment($id, $name_slug)
    {   
        $director=Director::where('directors.id',$id)->first();
        return view('user.director.director_comment',compact('director'));
    }

    //------End Director-----//

    //-----Property--------//

    public function PropertyDetails($title_slug)
    {
        $data=DB::table('properties')
                ->leftjoin('categories','properties.category_id','categories.id')
                ->leftjoin('subcategories','properties.type_id','subcategories.id')
                ->leftjoin('popular_places','properties.location_id','popular_places.id')
                ->leftjoin('sizes','properties.size_id','sizes.id')
                ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                ->where('title_slug',$title_slug)->first();
        return view('user.project.details',compact('data'));
        // return response()->json($property_details);
    }

    public function PropertyType($type_slug)
    {   
        $type=SubCategory::where('type_slug',$type_slug)->first();
        $p_type=Property::leftjoin('categories','properties.category_id','categories.id')
                        ->leftjoin('subcategories','properties.type_id','subcategories.id')
                        ->leftjoin('popular_places','properties.location_id','popular_places.id')
                        ->leftjoin('sizes','properties.size_id','sizes.id')
                        ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                        ->where('type_slug',$type_slug)->orderBy('id','DESC')->get();
        return view('user.project.property_type',compact('p_type','type'));
        // return response()->json($p_type);
    }

    public function PropertySearch(Request $request)
    {
        $title=$request->title;
        // $address=$request->address;
        $category=$request->category_id;
        $type=$request->type_id;
        $b_type=$request->business_type;
        $location=$request->location_id;
        $size=$request->size_id;

        // $search=$title.'/'.$location.'/'.$category.'/'.$type.'/'.$b_type.'/'.$size;
        $property=DB::table('properties')
                    ->leftjoin('categories','properties.category_id','categories.id')
                    ->leftjoin('subcategories','properties.type_id','subcategories.id')
                    ->leftjoin('popular_places','properties.location_id','popular_places.id')
                    ->leftjoin('sizes','properties.size_id','sizes.id')
                    ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                        ->where('title', 'like', '%' . $title . '%')
                        // ->where('address', 'like', '%' . $address . '%')
                        ->where('location_id', 'like', '%' . $location . '%')
                        ->where('category_id', 'like', '%' . $category . '%')
                        ->where('type_id', 'like', '%' . $type . '%')
                        ->where('business_type', 'like', '%' . $b_type . '%')
                        ->where('size_id', 'like', '%' . $size . '%')
                        ->orderBy('id','DESC')
                        ->get();
        if (count( $property) <1) {
            return view('user.empty_search');
           
        }else{
            return view('user.project.property_search',compact('property')); 
        }
        // return response()->json($property);
        
    }

    public function PopularProperty($slug)
    {   
        $place=Popular_place::where('slug',$slug)->first();
        $property=DB::table('properties')
                    ->leftjoin('categories','properties.category_id','categories.id')
                    ->leftjoin('subcategories','properties.type_id','subcategories.id')
                    ->leftjoin('popular_places','properties.location_id','popular_places.id')
                    ->leftjoin('sizes','properties.size_id','sizes.id')
                    ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                    ->where('slug',$slug)->orderBy('id','DESC')
                    ->get();
        return view('user.project.popular_property',compact('property','place'));
    }

    public function browse()
    {
        $browse=DB::table('properties')
                    ->leftjoin('categories','properties.category_id','categories.id')
                    ->leftjoin('subcategories','properties.type_id','subcategories.id')
                    ->leftjoin('popular_places','properties.location_id','popular_places.id')
                    ->leftjoin('sizes','properties.size_id','sizes.id')
                    ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                    ->paginate(12);
        return view('user.project.all_property',compact('browse'));
    }


    //------End Property-----//

    public function proposal()
    {   
        $category=Category::all();
        $size=Size::all();
        return view('user.proposal',compact('category','size'));
    }

    public function sendproposal(Request $request)
    {   
        $image = $request->file('image');
            if ($image) {

             $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
             Image::make($image)->resize(1080,720)->save('public/backend/images/proposal/'.$imageName);   
             $upload_image='public/backend/images/proposal/'.$imageName;

            $proposal= new Proposal;
            $proposal->title = $request->title;
            $proposal->business_type = $request->business_type;
            $proposal->category = $request->category;
            $proposal->size = $request->size;
            $proposal->location = $request->location;
            $proposal->room = $request->room;
            $proposal->p_address = $request->p_address;
            $proposal->city = $request->city;
            $proposal->state = $request->state;
            $proposal->zip = $request->zip;
            $proposal->name = $request->name;
            $proposal->phone = $request->phone;
            $proposal->email = $request->email;
            $proposal->address = $request->address;
            $proposal->description = $request->description;
            $proposal->status = 0;
            $proposal->image = $upload_image;
            $proposal->save();
            $notification = array(
                    'messege' =>'Successfully Proposal Send! Thank You! ',
                    'alert-type'=>'success'
                 );
                 return redirect()->back()->with($notification);
        }else{
            $proposal= new Proposal;
            $proposal->title = $request->title;
            $proposal->business_type = $request->business_type;
            $proposal->category = $request->category;
            $proposal->size = $request->size;
            $proposal->location = $request->location;
            $proposal->room = $request->room;
            $proposal->p_address = $request->p_address;
            $proposal->city = $request->city;
            $proposal->state = $request->state;
            $proposal->zip = $request->zip;
            $proposal->name = $request->name;
            $proposal->phone = $request->phone;
            $proposal->email = $request->email;
            $proposal->address = $request->address;
            $proposal->description = $request->description;
            $proposal->status = 0;
            $proposal->save();
            $notification = array(
                    'messege' =>'Successfully Proposal Send! Thank You ',
                    'alert-type'=>'success'
                 );
                 return redirect()->back()->with($notification);
        }

    }

    public function OtherService()
    {
        $service=Service::orderBy('id','DESC')->paginate(9);
        return view('user.service.all_service',compact('service'));
    }

    public function singleService($title_slug)
    {
        $service=Service::join('service_categories','services.service_id','service_categories.id')
                        ->select('services.*','service_categories.service_name')
                        ->where('title_slug',$title_slug)->first();
        return view('user.service.service_details',compact('service'));
        // return response()->json($service);
    }

}
