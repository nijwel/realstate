<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Clint;
Use Image;

class ClintController extends Controller
{
     public function __construct()
       {
          $this->middleware('auth:admin');
       }

       public function index()
       {
       	  $clint=Clint::all();
       	  return view('admin.clint.all_clint',compact('clint'))->with('no',1);
       }

       public function store(Request $request)
       {
       		$image_one=$request->file('image');
       		if ($image_one) {
                $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
                Image::make($image_one)->resize(329,230)->save('public/backend/images/clint/'.$imageNameOne);  
                $upload_image_one='public/backend/images/clint/'.$imageNameOne;

       			$clint=new Clint;
       			$clint->name = $request->name;
       			$clint->image = $upload_image_one;
       			$clint->link = $request->link;
       			$clint->save();
       			$notification = array(
               'messege' =>'Successfully Done!',
               'alert-type'=>'success'
    	        );
    	        return redirect()->back()->with($notification);
    	   		}
       }

       public function edit($id)
       {
       	   $clint=Clint::findorfail($id);
       	   return view('admin.clint.edit_clint',compact('clint'));
       }

       public function update(Request $request, $id)
       {
	   		$image_one=$request->file('image');
	   		if ($image_one) {
	            $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
	            Image::make($image_one)->resize(329,230)->save('public/backend/images/clint/'.$imageNameOne);  
	            $upload_image_one='public/backend/images/clint/'.$imageNameOne;

	   			$clint=Clint::findorfail($id);
	   				$old_image=$clint->image;
	   				unlink($old_image);
	   			$clint->name = $request->name;
	   			$clint->image = $upload_image_one;
	   			$clint->link = $request->link;
	   			$clint->save();
	   			$notification = array(
	           'messege' =>'Successfully Done!',
	           'alert-type'=>'success'
		        );
		        return redirect()->route('all.clint')->with($notification);
		   		}else{
		   			$clint=Clint::findorfail($id);
		   			$clint->name = $request->name;
	       			$clint->link = $request->link;
		   			$clint->save();
		   			$notification = array(
		           'messege' =>'Successfully Done!',
		           'alert-type'=>'success'
			        );
			        return redirect()->route('all.clint')->with($notification);
		   		}
		}
		
       public function delete($id)
       {
          $clint=Clint::findorfail($id);
             $old_image=$clint->image;
             unlink($old_image);
          $clint->delete();
          $notification = array(
                  'messege' =>'Successfully Done!',
                  'alert-type'=>'success'
                  );
                  return redirect()->back()->with($notification);
       }

}
