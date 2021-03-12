@extends('layouts.admin')
@section('all.slider','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Slider
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.slider') }}">Slider</a></li>
        <li class="breadcrumb-item active">Edit Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
    		  <div class="box-body">
	              <form action="{{ route('update.slider',$slider->id) }}" method="post" enctype="multipart/form-data" >
	              	@csrf
	              	<div class="form-group">
	              	  <label>Slider Title</label>
	              	  <input type="text" class="form-control" required="" value="{{ $slider->title }}" name="title" placeholder="Enter Sub Category Name">
	              	</div>
	              	<div class="row" >
	              		<div class="form-group col-sm-8">
	              		  <label>Slider Image</label>
	              		  <input type="file" class="form-control" name="image" placeholder="Enter Sub Category Name" onchange="readURL(this);" >
	              		</div>
	              		<div class="form-group col-sm-4" >
	              			<img src="#" id="one">
	              		</div>
	              	</div>
	              	<div class="form-group">
	              	  <label>Slider Details</label>
	              	  <textarea type="text" class="form-control" required="" name="description" >{{ $slider->description }}</textarea>
	              	</div>
    		  		<div class="box-footer">
    					<button type="submit" class="btn btn-primary float-right">Update</button>
    		  		</div>
    		  	  </form>        
		      </div>
		   </div>
		</div>
        <div class="col-6" >
        	<div class="box" >
        		<img src="{{ asset($slider->image) }}" style="height: 180px; width: 480px; " >
        		<label>Old Image</label>
        	</div>
        </div>
	  </div>
	</section>
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
		                    .width(120)
		                    .height(80);
		            };
		            reader.readAsDataURL(input.files[0]);
		        }
		     }
		  </script>
@endsection