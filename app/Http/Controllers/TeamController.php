<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Team;
Use Image;

class TeamController extends Controller
{
    public function __construct()
       {
          $this->middleware('auth:admin');
       }

       public function index()
       {
       	  $team=Team::all();
       	  return view('admin.team.all_team',compact('team'))->with('no',1);
       }

       public function store(Request $request)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(324,419)->save('public/backend/images/team/'.$imageNameOne);  
                $upload_image_one='public/backend/images/team/'.$imageNameOne;

       			$team=new Team;
       			$team->name = $request->name;
       			$team->image = $upload_image_one;
       			$team->designation = $request->designation;
       			$team->facebook = $request->facebook;
       			$team->twitter = $request->twitter;
       			$team->linkedin = $request->linkedin;
       			$team->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->back()->with($notification);
    	   		}
       }

       public function edit($id)
       {
       	   $team=Team::findorfail($id);
       	   return view('admin.team.edit_team',compact('team'));
       }

       public function update(Request $request, $id)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(324,419)->save('public/backend/images/team/'.$imageNameOne);  
                $upload_image_one='public/backend/images/team/'.$imageNameOne;

       			$team=Team::findorfail($id);
       				$old_image=$team->image;
       				unlink($old_image);
       			$team->name = $request->name;
       			$team->image = $upload_image_one;
       			$team->designation = $request->designation;
       			$team->facebook = $request->facebook;
       			$team->twitter = $request->twitter;
       			$team->linkedin = $request->linkedin;
       			$team->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->route('all.team')->with($notification);
    	   		}else{
    	   			$team=Team::findorfail($id);
    	   			$team->name = $request->name;
    	   			$team->designation = $request->designation;
    	   			$team->facebook = $request->facebook;
    	   			$team->twitter = $request->twitter;
    	   			$team->linkedin = $request->linkedin;
    	   			$team->save();
    	   			$notification = array(
    	           'messege' =>'Successfully Done!',
    	           'alert-type'=>'success'
    		        );
    		        return redirect()->route('all.team')->with($notification);
    	   		}
       }

       public function delete($id)
       {
          $team=Team::findorfail($id);
             $old_image=$team->image;
             unlink($old_image);
          $team->delete();
          $notification = array(
                  'messege' =>'Successfully Done!',
                  'alert-type'=>'success'
                  );
                  return redirect()->back()->with($notification);
       }
}
