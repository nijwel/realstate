@extends('layouts.admin')
@section('edit.logo','active')
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
	            <div class="box-body">
	              <form action="{{ route('update.logo',$logo->id) }}" method="post" enctype="multipart/form-data" >
	              	@csrf
	              	<div class="row" >
	              		<div class="form-group col-sm-8">
	              		  <label>Top Logo</label>
	              		  <input type="file" class="form-control" name="top_logo" onchange="readURL1(this);" >
	              		</div>
	              		<div class="form-group col-sm-4" >
	              			<img src="#" id="one">
	              		</div>
	              	</div>
	              	<div >
	              		<img src="{{ asset($logo->top_logo) }}" style="height: 80px; width: 120px;" >
	              		<br>
	              		<label>Old Image</label>
	              	</div>
	              	<div class="box-footer">
	    				<button type="submit" class="btn btn-primary float-right">Update</button>
	    		  	</div>
			  	  </form>
	            </div>
			  </div>
          </div>
		</div>
	        <div class="col-6">
	          <div class="box">
				  <div class="box-body">
		            <div class="box-body">
		              <form action="{{ route('update.logo',$logo->id) }}" method="post" enctype="multipart/form-data" >
		              	@csrf
		              	<div class="row" >
		              		<div class="form-group col-sm-8">
		              		  <label>Footer Logo</label>
		              		  <input type="file" class="form-control" name="footer_logo" onchange="readURL2(this);" >
		              		</div>
		              		<div class="form-group col-sm-4" >
		              			<img src="#" id="two">
		              		</div>
		              	</div>
		              	<div>
		              		<img src="{{ asset($logo->footer_logo) }}" style="height: 80px; width: 120px;" >
		              		<br>
		              		<label>Old Image</label>
		              	</div>
		              	<div class="box-footer">
		    				<button type="submit" class="btn btn-primary float-right">Update</button>
		    		  	</div>
				  	  </form>
		            </div>
				  </div>
	          </div>
			</div>
		  </div>
	  </div>         
	</section>
		    <!-- /.content -->
		  </div>
		  <!-- /.content-wrapper -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script type="text/javascript">
		  	function readURL1(input) {
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
		  <script type="text/javascript">
		  	function readURL2(input) {
		        if (input.files && input.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function (e) {
		                $('#two')
		                    .attr('src', e.target.result)
		                    .width(120)
		                    .height(80);
		            };
		            reader.readAsDataURL(input.files[0]);
		        }
		     }
		  </script>
@endsection