@extends('layouts.admin')

@section('admin_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profile</a></li>
        <li class="breadcrumb-item active">Edit profile</li>
      </ol>
    </section>
    <section class="content" >
    	<div class=" text-red box-title text-center" style="font-size: 30px;"> <b>{{ Auth::user()->name }}</b></div>
    	<div class=" text-center" style="font-size: 20px;">{{ Auth::user()->email }}</div>
    <div class="row" >
     <div class="col-6 " style="padding: 20px;" >
	  <div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Edit</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form action="{{ route('admin.update_profile') }}" method="post" enctype="multipart/form-data">
	    @csrf
          <div class="panel-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" >
              </div>
            </div>
            @if(Auth::user()->type == 1)
     		<div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Designation</label>
              <div class="col-sm-9">
                 <input type="text" class="form-control" value="{{ Auth::user()->designation }}"  required="" name="designation" >
              </div>
            </div>
            @else
    			<div class="form-group">
    	         <label for="inputEmail3" class="col-sm-3 control-label">Designation</label>
    	         <div class="col-sm-9">
    	            <input type="text" class="form-control" readonly="" value="{{ Auth::user()->designation }}"  required="" name="designation" >
    	         </div>
    	       </div>
            @endif
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Phone</label>
              <div class="col-sm-9">
                 <input type="text" class="form-control" value="{{ Auth::user()->mobile }}" required="" name="mobile">
             </div>
            </div>
            <br>
	                      {{-- <div class="form-group">
	                        <label for="inputEmail3" class="col-sm-3 control-label">Country</label>
	                         <div class="col-sm-9">
	                           <input type="text" class="form-control" value="{{ Auth::user()->country }}"  required="" name="country">
	                         </div>
	                      </div>
	                      <div class="form-group">
	                        <label for="inputEmail3" class="col-sm-3 control-label">City</label>
	                         <div class="col-sm-9">
	                           <input type="text" class="form-control" value="{{ Auth::user()->city }}"  required="" name="city">
	                         </div>
	                      </div>
	      				<div class="form-group">
	                        <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
	                         <div class="col-sm-9">
	                           <input type="text" class="form-control" value="{{ Auth::user()->gender }}"  required="" name="gender">
	                         </div>
	                      </div> --}}
	      </div> <!-- panel-body -->
	 </div>
	</div>
	<div class="col-6 " style="padding: 20px;" >
	  <div class="box box-primary">
		<div class="form-group" style="padding: 5px;">
		  <label for="exampleInputFile">File input</label>
		  <input type="file" class="form-control" id="exampleInputFile" name="image" >
	        <p class="help-block text-red">Upload image size under 2 Mb.</p>
	     	   @if(Auth::user()->image == NULL)
	     	       <img class="profile-user-img  img-fluid mx-auto d-block"  src="{{ URL::to('public/backend/images/6.png') }}" alt="" >
	     	   @else
	     	   <img class="profile-user-img  img-fluid mx-auto d-block" name="image" src="{{ asset(Auth::user()->image) }}" alt="User profile picture">
	     	   @endif 	
		   <input type="hidden" value="{{ Auth::user()->image }}" name="old_image">
		</div>
	  </div>
	</div>
	<div class="box-footer content">
	  <button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>
  </div>
</section>
</div>
@endsection