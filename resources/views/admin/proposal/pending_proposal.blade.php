@extends('layouts.admin')

@section('admin_content')
@section('pending','active')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pending Proposal
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Pending Proposal</li>
      </ol>
    </section>
      <br>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <!-- /.box-header -->
         <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th>SL</th>
							<th>Category</th>
							<th>Title</th>
							<th>Image</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($proposal as $row)
					  <tr>
					    <td>{{ $no ++ }}</td>
					    <td>{{ $row->category_name }}</td>
					    <td>{{ $row->title }}</td>
					    <td>
					    	<img src="{{ asset($row->image) }}" style="height: 60px; width: 120px;" >
					    </td>
					    <td>{{ $row->created_at->format('d-M-y g:i A') }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-primary" href="{{ route('view.proposal',$row->id) }}"> <i class="fa fa-eye"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.proposal',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Category</th>
							<th>Title</th>
							<th>Image</th>
							<th>Date</th>
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
  <!-- /.content-wrapper -->
</div>
@endsection