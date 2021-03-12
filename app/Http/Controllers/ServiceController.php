<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServiceCategory;
use App\Model\Service;
use DB;
use Image;

class ServiceController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$service=DB::table('services')
    				->join('service_categories','services.service_id','service_categories.id')
    				->select('services.*','service_categories.service_name')
    				->get();
    	return view('admin.service.all_service',compact('service'))->with('no',1);
    }

    public function create()
    {
        $servicetype=ServiceCategory::all();

        return view('admin.service.add_service',compact('servicetype'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        if ($image) {
            
            $imageName= uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1080,720)->save('public/backend/images/service/'.$imageName);
            $upload_image='public/backend/images/service/'.$imageName;

            $service = new Service;
            $service->title = $request->title;
            $service->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
            $service->service_id = $request->service_id;
            $service->short = $request->short;
            $service->image = $upload_image;
            $service->details = $request->details;
            $images = array();
            if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(720,480)->save('public/backend/images/service_album/'.$image_one_name);
                    $uploadname='public/backend/images/service_album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $service->images = json_encode($images);
            }
            $service->save();
            $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);

        }

    }

    public function edit($id)
    {
        $servicetype = ServiceCategory::all();
        $service=Service::findorfail($id);
        return view('admin.service.edit_service',compact('servicetype','service'));
    }

    public function update(Request $request ,$id)
    {   
        $images = array();
        $image = $request->file('image');
        if ($image) {
            
            $imageName= uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1080,720)->save('public/backend/images/service/'.$imageName);
            $upload_image='public/backend/images/service/'.$imageName;

            $service = Service::findorfail($id);
                 $old_image=$service->image;
                if ($old_image) {
                    unlink($old_image);
                }
            $service->title = $request->title;
            $service->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
            $service->service_id = $request->service_id;
            $service->short = $request->short;
            $service->image = $upload_image;
            $service->details = $request->details;
            
            if($request->has('old_images')){
             $images = $request->old_images;
            }
            else{
                $images = array(); 
            }
                if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(720,480)->save('public/backend/images/service_album/'.$image_one_name);
                    $uploadname='public/backend/images/service_album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $service->images = json_encode($images);
            }
            $service->save();
            $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->route('all.service')->with($notification);

        }else{
            $service = Service::findorfail($id);
            $service->title = $request->title;
            $service->title_slug = preg_replace('/\s+/u', '-', trim($request->title));
            $service->service_id = $request->service_id;
            $service->short = $request->short;
            $service->details = $request->details;
            if($request->has('old_images')){
             $images = $request->old_images;
            }
            else{
                $images = array(); 
            }
                if($request->hasFile('images')){
                foreach ($request->file('images') as $key => $image) {
                    $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(720,480)->save('public/backend/images/service_album/'.$image_one_name);
                    $uploadname='public/backend/images/service_album/'.$image_one_name;
                    array_push($images, $uploadname);
                }
                $service->images = json_encode($images);
            }
            $service->save();
            $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->route('all.service')->with($notification);

        }

    }

    public function delete($id)
    {
        $service=Service::findorfail($id);
            $old_image=$service->image;
                if ($old_image) {
                    unlink($old_image);
                }
        $service->delete();
        $notification = array(
                'messege' =>'Successfully Done!',
                'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
    }
}
