@extends('layouts.admin')
@section('admin_content')
@section('all.subcategory','active')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Property Type
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Property Type</li>
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
              {{-- <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#subcategory">
                Add Sub Category
              </button> --}}
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>SL</th>
							{{-- <th>Category Name</th> --}}
              <th>Property Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($subcategory as $row)
					  <tr>
					    <td>{{ $no ++ }}</td>
					    {{-- <td>{{ $row->category_name }}</td> --}}
              <td>{{ $row->subcategory_name }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.subcategory',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  {{-- <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.subcategory',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a> --}}
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>SL</th>
							{{-- <th>Category Name</th> --}}
              <th>Property Type</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade" id="subcategory">
            	  <div class="modal-dialog" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Add Subcategory</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.subcategory') }}" method="post" enctype="multipart/form-data" >
			              	@csrf
			                <!-- text input -->
			                {{-- <div class="form-group">
			                  <label>Category</label>
			                  <select type="text" class="form-control" name="category_id">
                          <option></option>
                          @foreach($category as $row)
                          <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
                          @endforeach
                        </select>
			                </div> --}}
                      <div class="form-group">
                        <label>Property Type</label>
                        <input type="text" class="form-control" required="" name="subcategory_name" placeholder="Enter Sub Category Name">
                      </div>
			            </div>
            		  </div>
            		  <div class="modal-footer">
            			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            			<button type="submit" class="btn btn-primary float-right">Submit</button>
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