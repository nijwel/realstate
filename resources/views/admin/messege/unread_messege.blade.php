@extends('layouts.admin')
@section('unread.messege','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unread Messege
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Unread Messege</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>email</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messege as $row)
            <tr>
              <td>{{ $no ++ }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->phone }}</td>
              <td>{{ $row->email }}</td>
              <td>
                  {{ \Carbon\Carbon::parse($row->created_at)->diffForhumans() }}
              </td>
              <td>
              	  <a class="btn btn-sm btn-success" href="{{ route('show.messege',$row->id) }}">View</a>
              	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.messege',$row->id) }}">Delete</a>
              	</td>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <th>SL</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>email</th>
            <th>Time</th>
            <th>Action</th>
            </tr>
          </tfoot>
        </table>
        </div>
            </div>
            <!-- /.box-body -->
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