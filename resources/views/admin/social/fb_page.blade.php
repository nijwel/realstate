@extends('layouts.admin')
@section('edit.fb_page','active')
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">

<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facebook Page
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Facebook Page</li>
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
        <div class="box-body">
          <div class="">
           <form action="{{ route('update.fb_page',$fbpage->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-xl-12 mg-t-25 mg-xl-t-0">
          <div class="card pd-20 pd-sm-40 form-layout ">
            <h6 class="tx-gray-800  tx-uppercase tx-bold tx-14 mg-b-10">Edit Pagebook Page</h6>
            <div>
          <label class="form-control-label">Page Name :</label>
            <input type="text" name="name" class="form-control" value="{{ $fbpage->name }}">
          </div>
            <br>
          <div>
          <label class="form-control-label">Facebook page link :</label>
            <input type="text" name="link" class="form-control" value="{{ $fbpage->link }}">
          </div>
            <br>
            <div class="row row-xs mg-t-30">
              <div class="col-sm-8 mg-l-auto">
                <div class="form-layout-footer">
                  <button type="submit" class="btn btn-success" href="">Update</button>
                </div><!-- form-layout-footer -->
              </div><!-- col-8 -->
            </div>
          </div><!-- card -->
        </div><!-- col-6 -->
        </div><!-- row -->
      
      </form>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </section>
</div>
</div>

@endsection