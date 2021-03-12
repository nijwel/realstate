<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proposal;
use Mail;
use App\Mail\sendMail;
use App\Model\Inbox;

class ProposalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pending()
    {
    	$proposal=Proposal::join('categories','proposals.category','categories.id')
    					  ->select('proposals.*','categories.category_name')
    					  ->where('status',0)->orderBy('id','DESC')->get();
    			return view('admin.proposal.pending_proposal',compact('proposal'))->with('no',1);
    }

    public function success()
    {
    	$proposal=Proposal::join('categories','proposals.category','categories.id')
    					  ->select('proposals.*','categories.category_name')
    					  ->where('status',1)->orderBy('id','DESC')->get();
    			return view('admin.proposal.success_proposal',compact('proposal'))->with('no',1);
    }

    public function reject()
    {
    	$proposal=Proposal::join('categories','proposals.category','categories.id')
    					  ->select('proposals.*','categories.category_name')
    					  ->where('status',2)->orderBy('id','DESC')->get();
    			return view('admin.proposal.reject_proposal',compact('proposal'))->with('no',1);
    }

    public function view($id)
    {
    	$proposal=Proposal::join('categories','proposals.category','categories.id')
    					  ->join('sizes','proposals.size','sizes.id')
    					  ->select('proposals.*','categories.category_name','sizes.size')
    					  ->findorfail($id);
    	return view('admin.proposal.view_proposal',compact('proposal'));

    }

    public function accept($id)
    {
    	$proposal=Proposal::where('id',$id)->update(['status' => 1]);
    	$notification = array(
    	    'messege' =>'Successfully accepted!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->route('pending')->with($notification);

    }
    public function denay($id)
    {
    	$proposal=Proposal::where('id',$id)->update(['status' => 2]);
    	$notification = array(
    	    'messege' =>'Successfully Rejected!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->route('pending')->with($notification);
    	
    }

    public function emailsend(Request $request)
    {
    	$validatedData = $request->validate([
               'message' => 'required|:messeges|max:99999',
            ]);

    	$inbox=new Inbox;
    	$inbox->email = $request->person;
    	$inbox->subject = $request->subject;
    	$inbox->message = $request->message;
    	$inbox->save();
 
 		$body=$request->message;

         Mail::send(new sendMail($body));
    	$notification = array(
    	    'messege' =>'Successfully Email Send!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
    	$proposal=Proposal::findorfail($id);
    	$proposal->delete();
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }

    public function outmail()
    {
    	$outmail=Inbox::orderBy('id','DESC')->get();
    	return view('admin.outmail.outmail',compact('outmail'))->with('no',1);
    }

    public function viewoutmail($id)
    {
    	$outmail=Inbox::findorfail($id);
    	return view('admin.outmail.view_outmail',compact('outmail'));

    }

    public function deleteoutmail($id)
    {
    	$outmail=Inbox::findorfail($id);
    	$outmail->delete();
    	$notification = array(
    	    'messege' =>'Successfully Done!',
    	    'alert-type'=>'success'
    	 );
    	return redirect()->back()->with($notification);
    }

    
}
