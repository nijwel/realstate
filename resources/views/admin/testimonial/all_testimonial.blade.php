@extends('layouts.admin')
@section('all.testimonial','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonial List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">All Testimonial</li>
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
              <a href="{{ route('add.testimonial') }}" class="btn btn-success pull-right ">
                Add Testimonial
              </a>
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
        				<th>Comments</th>
  							<th>Action</th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach($testimonial as $row)
  					  <tr>
  					    <td>{{ $no ++ }}</td>
  					    <td>{{ $row->name }}</td>
  					    <td>
  					    	<img src="{{ asset($row->image) }}" style="height: 80px; width: 80px; " >
  					    </td>
                			<td>{{ $row->details }}</td>
  					    <td>
  				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.testimonial',$row->id) }}"> <i class="fa fa-edit"></i></a>
  				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.testimonial',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
  					    </td>
  					  </tr>
  					  @endforeach
  					</tbody>
  					<tfoot>
  						<tr>
  							<th>SL</th>
  							<th>Name</th>
        				<th>Image</th>
        				<th>Comments</th>
  							<th>Action</th>
  						</tr>
  					</tfoot>
  				</table>
			 </div>
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