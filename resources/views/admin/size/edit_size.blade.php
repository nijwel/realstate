@extends('layouts.admin')
@section('all.size','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Size
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.size') }}">Size</a></li>
        <li class="breadcrumb-item active">Edit Size</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.size',$size->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			              	<div class="form-group">
			              	  <label>Size (Sqft)</label>
			              	  <input type="text" class="form-control" required="" value="{{ $size->size }}" name="size" >
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
		      </div>
		      <!-- /.row -->
		    </section>
		    <!-- /.content -->
		  </div>
    </div>
@endsection