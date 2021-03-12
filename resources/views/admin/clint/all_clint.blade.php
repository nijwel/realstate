@extends('layouts.admin')
@section('all.clint','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clients
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Clients</li>
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
              <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#clint">
                Add Client
              </button>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
              <th>Image</th>
      				<th>Link</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clint as $row)
					  <tr>
					    <td>{{ $no ++ }}</td>
					    <td>{{ $row->name }}</td>
					    <td>
					    	<img src="{{ asset($row->image) }}" style="height: 60px; width: 60px; " >
					    </td>
              			<td>{{ $row->designation }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.clint',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.clint',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
              <th>Image</th>
      				<th>Link</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
              <div class="modal fade" id="clint">
            	  <div class="modal-dialog" role="document">
            		<div class="modal-content">
            		  <div class="modal-header">
            			<h4 class="modal-title">Add Client</h4>
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			  <span aria-hidden="true">&times;</span></button>
            		  </div>
            		  <div class="modal-body">
			            <div class="box-body">
			              <form action="{{ route('store.clint') }}" method="post" enctype="multipart/form-data" >
			              @csrf
	                      <div class="form-group">
	                        <label>Name</label>
	                        <input type="text" class="form-control" required="" name="name" placeholder="Enter Name">
	                      </div>
                        <div class="form-group">
                          <label>Link</label>
                          <input type="text" class="form-control" required="" name="link" placeholder="Enter Link" >
                        </div>
	                      <div class="row" >
	                      	<div class="form-group col-sm-8">
	                      	  <label>Image</label>
	                      	  <input type="file" class="form-control" required="" name="image" placeholder="Enter Sub Category Name" onchange="readURL(this);" >
	                      	</div>
	                      	<div class="form-group col-sm-4" >
	                      		<img src="#" id="one">
	                      	</div>
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
</div>
  <!-- /.content-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
     }
  </script>
@endsection