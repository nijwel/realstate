@extends('layouts.admin')
@section('add.service','active')
@section('admin_content')

<div class="content-wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Service
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item active">Add Service</li>
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
  	  <a href="{{ route('all.service') }}" class="btn btn-success pull-right ">
  	    All Service
  	  </a>
  	</div>
    <form action="{{ route('store.service') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
          <label>Service Title</label>
          <input type="text" class="form-control" required="" name="title">
        </div>
        <div class="form-group">
          <label>Service Type</label>
          <select class="form-control" required="" name="service_id">
            <option></option>
            @foreach($servicetype as $row) 
            <option value="{{ $row->id }}" >{{ $row->service_name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Short Description</label>
          <textarea type="text" class="form-control textarea" required="" name="short">
          </textarea> 
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" multiple="" required="" name="image">
        </div>
        <div class="form-group">
          <label>Details</label>
          <textarea type="text" class="form-control textarea" required="" name="details" ></textarea>
        </div>
        <div class="form-group">
            <label class="col-form-label text-right" for="exampleSelect1">More Images</label>             
              <input type="file" class="form-control" onchange="FileImage(this);" name="images[]" multiple />                  
        </div>
    </div>
      </div>
      <div class="modal-footer">
    <button type="submit" class="btn btn-primary float-right">Submit</button>
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