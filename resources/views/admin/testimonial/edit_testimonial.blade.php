@extends('layouts.admin')
@section('all.testimonial','active')
@section('admin_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Testimonial
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.testimonial') }}">Testimonial</a></li>
        <li class="breadcrumb-item active">Edit Testimonial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.testimonial',$testimonial->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			              	<div class="form-group">
			              	  <label>Name</label>
			              	  <input type="text" class="form-control" required="" value="{{ $testimonial->name }}" name="name" placeholder="Enter Sub Category Name">
			              	</div>
			              	<div class="row" >
			              		<div class="form-group col-sm-8">
			              		  <label>Image</label>
			              		  <input type="file" class="form-control" name="image" placeholder="Enter Sub Category Name" onchange="readURL(this);" >
			              		</div>
			              		<div class="form-group col-sm-4 col-1.5" >
			              			<img src="#" id="one">
			              		</div>
			              	</div>
			              	<div class="form-group">
			              	  <label>Details</label>
			              	  <textarea type="text" class="form-control" required="" name="details" >{{ $testimonial->details }}</textarea>
			              	</div>
			            </div>
            		  </div>
            		  <div class="box-footer">
            			<button type="submit" class="btn btn-primary float-right">Update</button>
            		  </div>
            		  </form>

		          </div>
		          <!-- /.box -->          
		        </div>
		        <!-- /.col -->
		        <div class="col-1.5" >
		        	<div class="box" >
		        		<img src="{{ asset($testimonial->image) }}" style="height: 80px; width: 80px; " >
		        		<br>
		        		<label>Old Image</label>
		        	</div>
		        </div>
		      </div>
		      <!-- /.row -->
		    </section>
		    <!-- /.content -->
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
		                    .width(80)
		                    .height(80);
		            };
		            reader.readAsDataURL(input.files[0]);
		        }
		     }
		  </script>
@endsection