@extends('layouts.admin')
@section('all.director','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Director
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.director') }}">Director</a></li>
        <li class="breadcrumb-item active">Edit Director</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.director',$director->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			              	<div class="form-group">
	                        <label>Name</label>
	                        <input type="text" class="form-control" required="" name="name" value="{{ $director->name }}">
	                      </div>
                        <div class="form-group">
                          <label>Designation</label>
                          <input type="text" class="form-control" required="" name="designation" value="{{ $director->designation }}">
                        </div>
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" name="phone" value="{{ $director->phone }}">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" value="{{ $director->email }}">
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" required="" name="address" value="{{ $director->address }}" >
                        </div>
	                      <div class="row" >
	                      	<div class="form-group col-sm-8">
	                      	  <label>Image</label>
	                      	  <input type="file" class="form-control" name="image" onchange="readURL(this);" >
	                      	</div>
	                      	<div class="form-group col-sm-4" >
	                      		<img src="#" id="one">
	                      	</div>
	                      </div>
	                      <div class="form-group">
	                        <label>Comments</label>
	                        <textarea type="text" class="form-control textarea" required="" name="details" >
	                        	{{ $director->details }}"
	                        </textarea>
	                      </div>
                        <div class="form-group">
                          <label>Facbook Link</label>
                          <input type="text" class="form-control"  name="facebook" value="{{ $director->facebook }}" >
                        </div>
                        <div class="form-group">
                          <label>Twitter Link</label>
                          <input type="text" class="form-control"  name="twitter" value="{{ $director->twitter }}" >
                        </div>
                        <div class="form-group">
                          <label>Linkedin Link</label>
                          <input type="text" class="form-control"  name="linkedin" value="{{ $director->linkedin }}" >
                        </div>
			            </div>
            		  </div>
            		  <div class="box-footer">
            			<button type="submit" class="btn btn-primary">Update</button>
            		  </div>
            		  </form>

		          </div>
		          <!-- /.box -->          
		        </div>
		        <!-- /.col -->
		        <div class="col-1.5" >
		        	<div class="box" >
		        		<img src="{{ asset($director->image) }}" style="height: 230px; width: 329px; " >
		        		<br>
		        		<label>Old Image</label>
		        	</div>
		        </div>
		      </div>
		      <!-- /.row -->
		    </section>
		    <!-- /.content -->
		  </div>
		</div>
		  <!-- /.content-wrapper -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script type="text/javascript">
		  	function readURL(input) {
		        if (input.files && input.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function (e) {
		                $('#one')
		                    .attr('src', e.target.result)
		                    .width(100)
		                    .height(80);
		            };
		            reader.readAsDataURL(input.files[0]);
		        }
		     }
		  </script>
@endsection