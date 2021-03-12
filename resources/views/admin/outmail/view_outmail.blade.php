@extends('layouts.admin')
@section('outmail','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Sending Email
      </h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('outmail') }}"> Outmail</a></li>
        <li class="breadcrumb-item active">View Sending Email</li>
      </ul>
    </section>
      <br>
    <!-- Main content -->
    <section class="content">
          <br>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Reply Email</h3>
                <div class="float-right">
                <h6>Sendin Date :</h6>
                <p>{{ $outmail->created_at->format('d-M-y g:i A') }}</p>
                </div>
              </div>
              <!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <input class="form-control" readonly="" name="to" value="{{ $outmail->email }}">
                  </div>
                  <div class="form-group">
                    <input class="form-control" readonly="" name="subject" value="{{ $outmail->subject }}">
                  </div>
                  <div class="form-group">
                    <textarea id="compose-textarea" readonly="" name="messege" class="form-control" style="height: 300px">
                    	{{ $outmail->message }}
                    </textarea>
                  </div>
                </div>
            </div>
            <!-- /. box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection