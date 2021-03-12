@extends('layouts.admin')
@section('all.blog','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Blog
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.blog') }}">Blog</a></li>
        <li class="breadcrumb-item active">Edit Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="box">
        		  <div class="box-body">
		            <div class="box-body">
		              <form action="{{ route('update.blog',$blog->id) }}" method="post" enctype="multipart/form-data" >
		              	@csrf
		                <div class="form-group">
		                  <label>Blog Title</label>
		                  <input type="text" class="form-control" required="" value="{{ $blog->title }}" name="title">
		                </div>
		                <div class="form-group">
		                  <label>Blog Category</label>
		                  <select class="form-control" required="" name="category_id">
		                  	<option></option>
		                  	@foreach($blogcategory as $row) 
		                  	<option value="{{ $row->id }}" <?php if ($row->id == $blog->category_id) {
		                  		echo "selected";
		                  	} ?> >{{ $row->category_name }}</option>
		                  	@endforeach
		                  </select>
		                </div>
		                <div class="row" >
		                	<div class="form-group col-sm-8 ">
		                	  <label>Blog Image</label>
		                	  <input type="file" class="form-control" name="image" onchange="readURL1(this);">
		                	</div>
		                	<div class="form-group col-sm-4 ">
		                		<img src="#" id="one" >
		                	</div>
		                </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12" >
              <div >
                <img src="{{ asset($blog->image) }}" style="height: 180px; width: 360px; " >
                <br>
                <label>Old Image</label>
              </div>
            </div>
            <div class="form-group col-lg-12">
              <label>Blog Details</label>
              <textarea type="text" class="form-control textarea" required="" name="details" >{!! $blog->details !!}</textarea>
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
    </section>
    <!-- /.content -->
  </div>
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
@endsection