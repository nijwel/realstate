@extends('layouts.admin')
@section('all.user','active')
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
              <a href="{{ route('add.user') }}" type="button"  class="btn btn-success pull-right ">
                Add User
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
							<th>Designation</th>
							<th>Image</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $row)
					  <tr>
					    <td>{{ $no ++ }}</td>
					    <td>{{ $row->name }}</td>
					    <td>{{ $row->designation }}</td>
					    <td>
					    	<img src="{{ asset($row->image) }}" style="height: 60px; width: 60px;" >
					    </td>
					    <td>{{ $row->email }}</td>
					    <td>{{ $row->mobile }}</td>
					    <td>
					    	@if($row->home == 1)
					    	<span class="badge badge-success" >Home</span>
					    	@endif
					    	@if($row->c_proposal == 1)
					    	<span class="badge badge-success" >Client Proposal</span>
					    	@endif
					    	@if($row->p_setting == 1)
					    	<span class="badge badge-success" >Property Setting</span>
					    	@endif
					    	@if($row->property == 1)
					    	<span class="badge badge-success" >Property</span>
					    	@endif
					    	@if($row->about_us == 1)
					    	<span class="badge badge-success" >About Us</span>
					    	@endif
					    	@if($row->blog == 1)
					    	<span class="badge badge-success" >Blog</span>
					    	@endif
					    	@if($row->service == 1)
					    	<span class="badge badge-success" >Other Service</span>
					    	@endif
					    	@if($row->messege == 1)
					    	<span class="badge badge-success" >Messege</span>
					    	@endif
					    	@if($row->setting == 1)
					    	<span class="badge badge-success" >Setting</span>
					    	@endif
					    	@if($row->seo == 1)
					    	<span class="badge badge-success" >SEO</span>
					    	@endif
					    	@if($row->role_play == 1)
					    	<span class="badge badge-success" >Role Play</span>
					    	@endif
					    </td>
					    <td>
				    	  <a class="btn btn-sm btn-success" href="{{ route('edit.user',$row->id) }}"> <i class="fa fa-edit"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.user',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Designation</th>
							<th>Image</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Role</th>
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
</div>

  <!-- /.content-wrapper -->
@endsection