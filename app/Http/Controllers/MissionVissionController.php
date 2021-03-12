<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MissionVission;
use Image;

class MissionVissionController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
   {
   		$mission_vission=MissionVission::first();
   		return view('admin.mission_vission.edit_mission_vission',compact('mission_vission'));
   }
   public function update(Request $request, $id)
   {
       $image_one = $request->file('image_1');
       $image_two = $request->file('image_2');
       if ($image_one && $image_two) {

           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();     
           Image::make($image_one)->resize(440,300)->save('public/backend/images/mission_vission/'.$imageNameOne);   
           Image::make($image_two)->resize(440,300)->save('public/backend/images/mission_vission/'.$imageNameTwo);     
           $upload_image_one='public/backend/images/mission_vission/'.$imageNameOne;
           $upload_image_two='public/backend/images/mission_vission/'.$imageNameTwo;

       $mission_vission=MissionVission::findorfail($id);
           $old_image_one=$mission_vission->image_1;
           $old_image_two=$mission_vission->image_2;
               unlink($old_image_one);
               unlink($old_image_two);
       $mission_vission->title_1 = $request->title_1;
       $mission_vission->image_1 = $upload_image_one;
       $mission_vission->details_1 = $request->details_1;
       $mission_vission->title_2 = $request->title_2;
       $mission_vission->image_2 = $upload_image_two;
       $mission_vission->details_2 = $request->details_2;
       $mission_vission->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_one) {
           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
           Image::make($image_one)->resize(620,860)->save('public/backend/images/mission_vission/'.$imageNameOne);  
           $upload_image_one='public/backend/images/mission_vission/'.$imageNameOne;

       $mission_vission=MissionVission::findorfail($id);
           $old_image_one=$mission_vission->image_1;
               unlink($old_image_one);
       $mission_vission->title_1 = $request->title_1;
       $mission_vission->image_1 = $upload_image_one;
       $mission_vission->details_1 = $request->details_1;
       $mission_vission->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_two) {
   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();    
   
           Image::make($image_two)->resize(470,500)->save('public/backend/images/mission_vission/'.$imageNameTwo);     
           $upload_image_two='public/backend/images/mission_vission/'.$imageNameTwo;


       $mission_vission=MissionVission::findorfail($id);
           $old_image_two=$mission_vission->image_2;
               unlink($old_image_two);
       $mission_vission->title_2 = $request->title_2;
       $mission_vission->image_2 = $upload_image_two;
       $mission_vission->details_2 = $request->details_2;
       $mission_vission->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }else{
       $mission_vission=MissionVission::findorfail($id);
       $mission_vission->title_1 = $request->title_1;
       $mission_vission->details_1 = $request->details_1;
       $mission_vission->title_2 = $request->title_2;
       $mission_vission->details_2 = $request->details_2;
       $mission_vission->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
      // return response()->json($product);
       }
   }
}
