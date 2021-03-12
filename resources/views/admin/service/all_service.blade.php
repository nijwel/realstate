@extends('layouts.admin')
@section('all.service','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Service</li>
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
              <a href="{{ route('add.service') }}" type="button"  class="btn btn-success pull-right ">
                Add Service
              </a>
              </h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>SL</th>
							<th>Service Type</th>
							<th>Title</th>
							<th>Image</th>
							<th>Short Details</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($service as $row)
					  <tr>
					    <td>{{ $no ++ }}</td>
					    <td>{{ $row->service_name }}</td>
					    <td>{{ $row->title }}</td>
					    <td>
					    	<img src="{{ asset($row->image) }}" style="height: 60px; width: 100px;" >
					    </td>
					    <td>{!! Str::limit($row->short, 100) !!}</td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.service',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.service',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Service Type</th>
							<th>Title</th>
							<th>Image</th>
							<th>Short Details</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
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
@endsection