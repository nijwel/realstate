@extends('layouts.admin')
@section('add.blog','active')
@section('admin_content')

<div class="content-wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Blog
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item active">Add Blog</li>
    </ol>
  </section>
    <br>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="box">
  <div class="box-body">
  	<div class="box-header">
  	  <a href="{{ route('all.blog') }}" class="btn btn-success pull-right ">
  	    All Blog
  	  </a>
  	</div>
    <form action="{{ route('store.blog') }}" method="post" enctype="multipart/form-data" >
    @csrf
      <div class="form-group">
        <label>Blog Title</label>
        <input type="text" class="form-control" required="" name="title">
      </div>
      <div class="form-group">
        <label>Blog Category</label>
        <select class="form-control" required="" name="category_id">
        	<option></option>
        	@foreach($blogcategory as $row) 
        	<option value="{{ $row->id }}" >{{ $row->category_name }}</option>
        	@endforeach
        </select>
      </div>
      <div class="row" >
      	<div class="form-group col-sm-10 ">
      	  <label>Blog Image</label>
      	  <input type="file" class="form-control" required="" name="image" onchange="readURL1(this);">
      	</div>
      	<div class="form-group col-sm-2 ">
      		<img src="#" id="one" >
      	</div>
      </div>
      <div class="form-group">
        <label>Blog Details</label>
        <textarea type="text" class="form-control textarea" required="" name="details" ></textarea>
      </div>
      <div>
      	<button type="Submit" class="btn btn-success" >Submit</button>
      </div>
    </form>
  </div>
  </div>
 </div>
</div>

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