<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Subcategory;
use App\Model\Property;
use App\Model\Size;
use App\Model\Popular_place;
use DB;
use Image;

class PropertyController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function add()
    {	
    	$category = Category::all();
    	$type = Subcategory::all();
        $size = Size::all();
        $location = Popular_place::where('status',1)->get();
    	return view('admin.property.add_property',compact('category','type','location','size'));
    }

    public function store(Request $request)
    {
    	$image = $request->file('image');
    	if ($image) {
    		
    		$imageName= uniqid().'.'.$image->getClientOriginalExtension();
    		Image::make($image)->resize(1080,720)->save('public/backend/images/property/'.$imageName);
    		$upload_image='public/backend/images/property/'.$imageName;

    		$property = new Property;
    		$property->title = $request->title;
    		$property->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
    		$property->location_id = $request->location_id;
            $property->size_id = $request->size_id;
    		$property->category_id = $request->category_id;
    		$property->type_id = $request->type_id;
    		$property->business_type = $request->business_type;
    		$property->front_page = $request->front_page;
    		$property->image = $upload_image;
    		$property->description = $request->description;
    		$property->details = $request->details;
    		$property->featurs = $request->featurs;
            $property->map = $request->map;
            $property->video_link = $request->video_link;
    		$property->status = 1;
            $floor_plan = array();
            if($request->hasFile('floor_plan')){
                foreach ($request->file('floor_plan') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   // Image::make($image)->resize(600,600)->save(storage_path('product/image/'.$image_one_name));
                    $image->move('public/backend/images/floor_plan/album/',$image_one_name);
                    $uploadname='public/backend/images/floor_plan/album/'.$image_one_name;
                    array_push($floor_plan, $uploadname);
                }
                $property->floor_plan = json_encode($floor_plan);
            }
            $images = array();
            if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   // Image::make($image)->resize(600,600)->save(storage_path('product/image/'.$image_one_name));
                    $image->move('public/backend/images/album/',$image_one_name);
                    $uploadname='public/backend/images/album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $property->images = json_encode($images);
            }
    		$property->save();
    		$notification = array(
	            'messege' =>'Successfully Done!',
	            'alert-type'=>'success'
	         );
	         return redirect()->back()->with($notification);

    	}
    }

    public function index()
    {   
        $property=DB::table('properties')
                        ->join('categories','properties.category_id','categories.id')
                        ->join('subcategories','properties.type_id','subcategories.id')
                        ->select('properties.*','categories.category_name','subcategories.subcategory_name')
                        ->get();
        return view('admin.property.all_property',compact('property'))->with('no',1);
    }

    public function active($id)
    {
        $property=Property::findorfail($id);
        $property->where('id',$id)->update(['status' => 0]);
        $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
    }

    public function deactive($id)
    {
        $property=Property::findorfail($id);
        $property->where('id',$id)->update(['status' => 1]);
        $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
    }

    public function view($id)
    {
        $property=Property::leftjoin('categories','properties.category_id','categories.id')
                          ->leftjoin('subcategories','properties.type_id','subcategories.id')
                          ->leftjoin('popular_places','properties.location_id','popular_places.id')
                          ->leftjoin('sizes','properties.size_id','sizes.id')
                          ->select('properties.*','categories.category_name','subcategories.subcategory_name','popular_places.name','sizes.size')
                          ->where('properties.id',$id)->first();
        return view('admin.property.view_property',compact('property'));
    }

    public function edit($id)
    {
        $category = Category::all();
        $type = Subcategory::all();
        $size = Size::all();
        $location = Popular_place::all();
        $property=Property::findorfail($id);
        return view('admin.property.edit_property',compact('category','type','property','location','size'));
    }

    public function update(Request $request,$id)
    {   
        $floor_plan = array();
        $images = array();
        $image = $request->file('image');
        if ($image) {
            
            $imageName= uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1080,720)->save('public/backend/images/property/'.$imageName);
            $upload_image='public/backend/images/property/'.$imageName;

            $property = Property::findorfail($id);
                $old_image=$property->image;
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
                
            $property->title = $request->title;
            $property->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
            $property->location_id = $request->location_id;
            $property->size_id = $request->size_id;
            $property->category_id = $request->category_id;
            $property->type_id = $request->type_id;
            $property->business_type = $request->business_type;
            $property->front_page = $request->front_page;
            $property->image = $upload_image;
            $property->map = $request->map;
            $property->description = $request->description;
            $property->details = $request->details;
            $property->featurs = $request->featurs;
            $property->video_link = $request->video_link;
            $property->status = 1;
            if($request->has('old_images')){
             $images = $request->old_images;
            }
            else{
                $images = array(); 
            }
                if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(720,480)->save('public/backend/images/album/'.$image_one_name);
                    $uploadname='public/backend/images/album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $property->images = json_encode($images);
            }

            if($request->has('previous_images')){
             $floor_plan = $request->previous_images;
            }
            else{
                $floor_plan = array(); 
            }
                if($request->hasFile('floor_plan')){
                foreach ($request->file('floor_plan') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(720,480)->save('public/backend/floor_plan/album/'.$image_one_name);
                    $uploadname='public/backend/floor_plan/album/'.$image_one_name;
                    array_push($floor_plan, $uploadname);
                }
                $property->floor_plan = json_encode($floor_plan);
            }
            $property->save();
            $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);

        }else{
            $property = Property::findorfail($id);
            $property->title = $request->title;
            $property->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
            $property->location_id = $request->location_id;
            $property->size_id = $request->size_id;
            $property->category_id = $request->category_id;
            $property->type_id = $request->type_id;
            $property->business_type = $request->business_type;
            $property->front_page = $request->front_page;
            $property->description = $request->description;
            $property->details = $request->details;
            $property->map = $request->map;
            $property->featurs = $request->featurs;
            $property->video_link = $request->video_link;
            $property->status = 1;
            if($request->has('old_images')){
             $images = $request->old_images;
            }
            else{
                $images = array(); 
            }
                if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(720,480)->save('public/backend/images/album/'.$image_one_name);
                    // $image->move('public/backend/images/album/',$image_one_name);
                    $uploadname='public/backend/images/album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $property->images = json_encode($images);
            }

            if($request->has('previous_images')){
             $floor_plan = $request->previous_images;
            }
            else{
                $floor_plan = array(); 
            }
                if($request->hasFile('floor_plan')){
                foreach ($request->file('floor_plan') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(720,480)->save('public/backend/floor_plan/album/'.$image_one_name);
                    // $image->move('public/backend/floor_plan/album/',$image_one_name);
                    $uploadname='public/backend/floor_plan/album/'.$image_one_name;
                    array_push($floor_plan, $uploadname);
                }
                $property->floor_plan = json_encode($floor_plan);
            }
            $property->save();
            $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
        }
    }

    public function delete($id)
    {
        $property=Property::findorfail($id);
            $old_image=$property->image;
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
        $property->delete();
        $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->route('all.property')->with($notification);
    }

}
