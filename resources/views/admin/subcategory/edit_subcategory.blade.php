@extends('layouts.admin')
@section('all.subcategory','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Property Type
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('all.subcategory') }}">Property Type</a></li>
        <li class="breadcrumb-item active">Edit Property Type</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="box">
            		  <div class="box-body">
			            <div class="box-body">
			              <form action="{{ route('update.subcategory',$subcategory->id) }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			                <!-- text input -->
			                {{-- <div class="form-group">
                        <label>Category</label>
                        <select type="text" class="form-control" name="category_id">
                          <option></option>
                          @foreach($category as $row)
                            <option value="{{ $row->id }}" <?php if ($row->id == $subcategory->category_id) {
                              echo "selected";
                            } ?> >{{ $row->category_name }}</option>
                          @endforeach
                        </select>
                      </div> --}}
                      <div class="form-group">
                        <label>Property Type</label>
                        <input type="text" class="form-control" value="{{ $subcategory->subcategory_name }}" name="subcategory_name" placeholder="Enter Sub Category Name">
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