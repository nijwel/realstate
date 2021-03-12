<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Story;
use Image;
class StoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
   {
   		$story=Story::first();
   		return view('admin.story.edit_story',compact('story'));
   }
   public function update(Request $request, $id)
   {
       $image_one = $request->file('image_1');
       $image_two = $request->file('image_2');
       $image_three = $request->file('image_3');
       $image_four = $request->file('image_4');
       if ($image_one && $image_two && $image_three && $image_four) {

           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();   
           $imageNameThree= uniqid().'.'.$image_three->getClientOriginalExtension();   
           $imageNameFour= uniqid().'.'.$image_four->getClientOriginalExtension();   
           Image::make($image_one)->resize(620,860)->save('public/backend/images/story/'.$imageNameOne);   
           Image::make($image_two)->resize(400,400)->save('public/backend/images/story/'.$imageNameTwo);   
           Image::make($image_three)->resize(1920,740)->save('public/backend/images/story/'.$imageNameThree);   
           Image::make($image_four)->resize(320,83)->save('public/backend/images/story/'.$imageNameFour);   
           $upload_image_one='public/backend/images/story/'.$imageNameOne;
           $upload_image_two='public/backend/images/story/'.$imageNameTwo;
           $upload_image_three='public/backend/images/story/'.$imageNameThree;
           $upload_image_four='public/backend/images/story/'.$imageNameFour;

       $story=Story::findorfail($id);
           $old_image_one=$story->image_1;
           $old_image_two=$story->image_2;
           $old_image_three=$story->image_3;
           $old_image_four=$story->image_4;
               unlink($old_image_one);
               unlink($old_image_two);
               unlink($old_image_three);
               unlink($old_image_four);
       $story->title_1 = $request->title_1;
       $story->image_1 = $upload_image_one;
       $story->details_1 = $request->details_1;
       $story->title_2 = $request->title_2;
       $story->image_2 = $upload_image_two;
       $story->details_2 = $request->details_2;
       $story->title_3 = $request->title_3;
       $story->image_3 = $upload_image_three;
       $story->details_3 = $request->details_3;
       $story->title_4 = $request->title_4;
       $story->image_4 = $upload_image_four;
       $story->details_4 = $request->details_4;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_one) {
           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();      
           Image::make($image_one)->resize(620,860)->save('public/backend/images/story/'.$imageNameOne);  
           $upload_image_one='public/backend/images/story/'.$imageNameOne;

       $story=Story::findorfail($id);
           $old_image_one=$story->image_1;
               unlink($old_image_one);
       $story->title_1 = $request->title_1;
       $story->image_1 = $upload_image_one;
       $story->details_1 = $request->details_1;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_one && $image_two) {

           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();      
           Image::make($image_one)->resize(620,860)->save('public/backend/images/story/'.$imageNameOne);   
           Image::make($image_two)->resize(400,400)->save('public/backend/images/story/'.$imageNameTwo);     
           $upload_image_one='public/backend/images/story/'.$imageNameOne;
           $upload_image_two='public/backend/images/story/'.$imageNameTwo;

       $story=Story::findorfail($id);
           $old_image_one=$story->image_1;
           $old_image_two=$story->image_2;
               unlink($old_image_one);
               unlink($old_image_two);
       $story->title_1 = $request->title_1;
       $story->image_1 = $upload_image_one;
       $story->details_1 = $request->details_1;
       $story->title_2 = $request->title_2;
       $story->image_2 = $upload_image_two;
       $story->details_2 = $request->details_2;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_two && $image_four) {
   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();   
           $imageNameFour= uniqid().'.'.$image_four->getClientOriginalExtension();   

           Image::make($image_two)->resize(400,400)->save('public/backend/images/story/'.$imageNameTwo);   
           Image::make($image_four)->resize(320,83)->save('public/backend/images/story/'.$imageNameFour);   

           $upload_image_two='public/backend/images/story/'.$imageNameTwo;
           $upload_image_four='public/backend/images/story/'.$imageNameFour;

       $story=Story::findorfail($id);

           $old_image_two=$story->image_1;
           $old_image_four=$story->image_4;
               unlink($old_image_two);
               unlink($old_image_four);
       $story->title_2 = $request->title_2;
       $story->image_2 = $upload_image_two;
       $story->details_2 = $request->details_2;
       $story->title_4 = $request->title_4;
       $story->image_4 = $upload_image_four;
       $story->details_4 = $request->details_4;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_one && $image_three) {

           $imageNameOne= uniqid().'.'.$image_one->getClientOriginalExtension();     
           $imageNameThree= uniqid().'.'.$image_three->getClientOriginalExtension();   
           Image::make($image_one)->resize(620,860)->save('public/backend/images/story/'.$imageNameOne);      
           Image::make($image_three)->resize(1920,740)->save('public/backend/images/story/'.$imageNameThree);   
           $upload_image_one='public/backend/images/story/'.$imageNameOne;
           $upload_image_three='public/backend/images/story/'.$imageNameThree;

       $story=Story::findorfail($id);
           $old_image_one=$product->image_1;
           $old_image_three=$product->image_3;
               unlink($old_image_one);
               unlink($old_image_three);
       $story->title_1 = $request->title_1;
       $story->image_1 = $upload_image_one;
       $story->details_1 = $request->details_1;
       $story->title_3 = $request->title_3;
       $story->image_3 = $upload_image_three;
       $story->details_3 = $request->details_3;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_two) {
   
           $imageNameTwo= uniqid().'.'.$image_two->getClientOriginalExtension();    
   
           Image::make($image_two)->resize(400,400)->save('public/backend/images/story/'.$imageNameTwo);     
           $upload_image_two='public/backend/images/story/'.$imageNameTwo;


       $story=Story::findorfail($id);
           $old_image_two=$story->image_2;
               unlink($old_image_two);
       $story->title_2 = $request->title_2;
       $story->image_2 = $upload_image_two;
       $story->details_2 = $request->details_2;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_three) {
   
           $imageNameThree= uniqid().'.'.$image_three->getClientOriginalExtension();   
   
           Image::make($image_three)->resize(1920,740)->save('public/backend/images/story/'.$imageNameThree);   
           $upload_image_three='public/backend/images/story/'.$imageNameThree;

       $story=Story::findorfail($id);
           $old_image_three=$story->image_3;
               unlink($old_image_three);
       $story->title_3 = $request->title_3;
       $story->image_3 = $upload_image_three;
       $story->details_3 = $request->details_3;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }elseif ($image_four) {
           $imageNameFour= uniqid().'.'.$image_four->getClientOriginalExtension();      
           Image::make($image_four)->resize(320,83)->save('public/backend/images/story/'.$imageNameFour);  
           $upload_image_four='public/backend/images/story/'.$imageNameFour;

       $story=Story::findorfail($id);
           $old_image_four=$story->image_4;
               unlink($old_image_four);
       $story->title_4 = $request->title_4;
       $story->image_4 = $upload_image_four;
       $story->details_4 = $request->details_4;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
       }else{
       $story=Story::findorfail($id);
       $story->title_1 = $request->title_1;
       $story->details_1 = $request->details_1;
       $story->title_2 = $request->title_2;
       $story->details_2 = $request->details_2;
       $story->title_3 = $request->title_3;
       $story->details_3 = $request->details_3;
       $story->title_4 = $request->title_4;
       $story->details_4 = $request->details_4;
       $story->save();
       $notification = array(
           'messege' =>'Successfully Done!!',
           'alert-type'=>'success'
        );
       return redirect()->back()->with($notification);
      // return response()->json($product);
       }
   }
}
