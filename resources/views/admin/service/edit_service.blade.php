@extends('layouts.admin')
@section('all.service','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Service
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.service') }}"> Service</a></li>
        <li class="breadcrumb-item active">Edit Service</li>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
    		  <div class="modal-body">
	            <div class="box-body">
	              <form action="{{ route('update.service',$service->id) }}" method="post" enctype="multipart/form-data" >
	              	@csrf
	                <div class="form-group">
	                  <label>Service Title</label>
	                  <input type="text" class="form-control" value="{{ $service->title }}" name="title">
	                </div>
	                <div class="form-group">
	                  <label>Service Type</label>
	                  <select class="form-control" required="" name="service_id">
	                  	<option></option>
	                  	@foreach($servicetype as $row) 
	                  	<option value="{{ $row->id }}" <?php if ($service->service_id == $row->id) {
	                  		echo "selected";
	                  	} ?> >{{ $row->service_name }}</option>
	                  	@endforeach
	                  </select>
	                </div>
	                <div class="form-group">
	                  <label>Short Description</label>
	                  <textarea type="text" class="form-control textarea" name="short">
	                  	{{ $service->short }}
	                  </textarea>
	                </div>
	                <div class="row" >
		                <div class="form-group col-md-10">
	                	  <label>Image</label>
	                	  <input type="file" class="form-control" name="image">
		                </div>
		                <div class="form-group col-md-2">
		                	<img src="{{ asset($service->image) }}" style="width: 100px; height: 60px;">
		                </div>
	                </div>
	                <div class="form-group">
	                  <label>Details</label>
	                  <textarea type="text" class="form-control textarea" required="" name="details" >
	                  	{{ $service->details }}
	                  </textarea>
	                </div>
	                <div class="row" >
	                  <div class="form-group col-md-6">
	                      <label class="col-form-label text-right" for="exampleSelect1">More Images</label>             
	                        <input type="file" class="form-control" name="images[]" multiple />                  
	                  </div>
	                  <div class="form-group col-md-6">
	                     <div class="container">
	                       <div>
	                         @php
	                         $images = json_decode($service->images,true);
	                         @endphp
	                         @if(!$images)
                                 @else
                                 <div class="row" >
                                  @foreach($images as $key => $image)
                                    <div class="col-md-4" >
                                       <img alt="" src="{{asset($image)}}" style="width: 150px; height: auto; padding: 2px;">
                                       <input type="hidden" name="old_images[]" value="{{ $image }}">
                                       <button type="button" class="btn btn-danger remove-files"><i class="fa fa-times"></i></button>
                                    </div>
                                  @endforeach
                                  </div>
                                 @endisset
	                       </div>
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
       </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- /.content-wrapper -->
  <script>
  	$('.remove-files').on('click', function(){
  	    $(this).parents(".col-md-4").remove();
  	});
  </script>
@endsection