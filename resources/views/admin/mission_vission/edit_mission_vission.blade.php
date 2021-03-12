@extends('layouts.admin')
@section('edit.mission_vission','active')
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mission & Vission
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Mission&Vission</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('update.mission_vission',$mission_vission->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row" >
            <div class="col-sm-6" >
            <div class="box-body">
              <div class="col-xl-12 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout ">
                  <h6 class="tx-gray-800  tx-uppercase tx-bold tx-14 mg-b-10" style="background: #389AF0; padding: 10px; color: white;" >{{ $mission_vission->title_1 }} Section</h6>
                    <br>
                  <div>
                    <label class="form-control-label">Title :</label>
                    <input type="text" readonly="" name="title_1" class="form-control" value="{{ $mission_vission->title_1 }}">
                  </div>
                    <br>
                  <div class="row" >
                    <div class="col-sm-8" >
                      <label class="form-control-label">Image :</label>
                       <input type="file" name="image_1" class="form-control" value="">
                    </div>
                    <div class="col-sm-4" >
                      <img src="{{ asset($mission_vission->image_1) }}" style="height: 100px;" >
                    </div>
                  </div>
                    <br>
                  <div>
                    <label class="form-control-label">Description :</label>
                    <textarea type="text" name="details_1" class="form-control textarea" value="">
                      {{ $mission_vission->details_1 }}
                    </textarea>
                  </div>
                    <br>
                  </div>
                </div>
               </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-sm-6" >
              <div class="box-body">
                <div class="col-xl-12 mg-t-25 mg-xl-t-0">
                  <div class="card pd-20 pd-sm-40 form-layout ">
                  <h6 class="tx-gray-800  tx-uppercase tx-bold tx-14 mg-b-10" style="background: #389AF0; padding: 10px; color: white;">{{ $mission_vission->title_2 }} Section</h6>
                    <br>
                  <div>
                    <label class="form-control-label">Title :</label>
                    <input type="text" readonly="" name="title_2" class="form-control" value="{{ $mission_vission->title_2 }}">
                  </div>
                    <br>
                  <div class="row" >
                    <div class="col-sm-8" >
                      <label class="form-control-label">Image :</label>
                       <input type="file" name="image_2" class="form-control" value="">
                    </div>
                    <div class="col-sm-4" >
                      <img src="{{ asset($mission_vission->image_2) }}" style="height: 100px;" >
                    </div>
                  </div>
                    <br>
                  <div>
                    <label class="form-control-label">Description :</label>
                    <textarea type="text" name="details_2" class="form-control textarea" value="">
                      {{ $mission_vission->details_2 }}
                    </textarea>
                  </div>
                    <br>
                  </div>
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
            <div class="form-layout-footer container ">
              <button type="submit" class="btn btn-success" href="">Update</button>
            </div>
            </div>
        </form>
      </div>
  </section>
</div>

@endsection