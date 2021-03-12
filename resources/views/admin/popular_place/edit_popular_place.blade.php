@extends('layouts.admin')
@section('all.popular_place','active')
@section('admin_content')

<div class="content-wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Place
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.popular_place') }}">Place</a></li>
        <li class="breadcrumb-item active">Edit Place</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.popular_place',$popularplace->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			              	<div class="form-group">
			              	  <label>Place Name</label>
			              	  <input type="text" class="form-control" required="" value="{{ $popularplace->name }}" name="name" >
			              	</div>
			              	<div class="row" >
			              		<div class="form-group col-sm-8">
			              		  <label>Image</label>
			              		  <input type="file" class="form-control" name="image" placeholder="Enter Sub Category Name" onchange="readURL(this);" >
			              		</div>
			              		<div class="form-group col-sm-4" >
			              			<img src="#" id="one">
			              		</div>
			              	</div>
			              <div class="form-group">
			                <label>Popular Place</label>
			                <select type="text" class="form-control" required="" name="popular_place" placeholder="Enter Sub Category Name">
			                  <option value="1" <?php if ($popularplace->popular_place == 1) {
			                  	echo "selected";
			                  } ?> >Yes</option>
			                  <option value="0" <?php if ($popularplace->popular_place == 0) {
			                  	echo "selected";
			                  } ?> >No</option>
			                </select>
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
		        <div class="col-6" >
		        	<div class="box" >
		        		<img src="{{ asset($popularplace->image) }}" style="height: 180px; width: 500px; " >
		        		<label>Old Image</label>
		        	</div>
		        </div>
		      </div>
		      <!-- /.row -->
		    </section>
		    <!-- /.content -->
		  </div>
		  <!-- /.content-wrapper -->
		 </div>
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