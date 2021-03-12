@extends('layouts.admin')
@section('all.category','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.category') }}">Category</a></li>
        <li class="breadcrumb-item active">Edit Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.category',$category->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Category</label>
			                  <input type="text" class="form-control" required="" name="category_name" value="{{ $category->category_name }}">
			                </div>
			            </div>
            		  </div>
            		  <div class="box-footer">
            			<button type="submit" class="btn btn-primary float-right">Update</button>
            		  </div>
            		  </form>
            		</div>
            		<!-- /.modal-content -->
            	  </div>
            	  <!-- /.modal-dialog -->
              </div>
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection