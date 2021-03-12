@extends('layouts.admin')
@section('edit.seo','active')
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SEO
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">SEO Setting</li>
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
           <form action="{{ route('update.seo',$seo->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-xl-12 mg-t-25 mg-xl-t-0">
          <div class="card pd-20 pd-sm-40 form-layout ">
            <h6 class="tx-gray-800  tx-uppercase tx-bold tx-14 mg-b-10">Edit SEO</h6>
            <br>
          <div>
          <label class="form-control-label">Meta Title :</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $seo->meta_title }}">
          </div>
            <br>
          <div>
          <label class="form-control-label">Meta Author :</label>
            <input type="text" name="meta_author" class="form-control" value="{{ $seo->meta_author }}">
          </div>
            <br>
          <div>
          <label class="form-control-label">Meta Description :</label>
            <textarea type="text" name="meta_description" class="form-control textarea" value="{{ $seo->meta_description  }}">
            </textarea>
          </div>
            <br>
          <div>
          <label class="form-control-label">Meta Keyword :</label>
            <input type="text" name="meta_keyword" class="form-control" value="{{ $seo->meta_keyword  }}">
          </div>
            <br>
          <div>
          <label class="form-control-label">Google Verification :</label>
            <input type="text" name="google_verification" class="form-control" value="{{ $seo->google_verification  }}">
          </div>
            <br>
            <div>
            <label class="form-control-label">Being Verification :</label>
              <input type="text" name="being_verification" class="form-control" value="{{ $seo->being_verification  }}">
            </div>
              <br>
              <div>
              <label class="form-control-label">Google Analytic :</label>
                <input type="text" name="google_analytic" class="form-control" value="{{ $seo->google_analytic }}">
              </div>
                <br>
              <div>
              <label class="form-control-label">Alexa Analytic :</label>
                <input type="text" name="alexa_analytic" class="form-control" value="{{ $seo->alexa_analytic }}">
              </div>
                <br>
                <div class="row" >
                	<div class="col-sm-10" >
                		<label class="form-control-label">Fav Icon :</label>
                		<input type="file" name="meta_icon" class="form-control" value="{{ $seo->alexa_analytic }}">
                	</div>
                	<div class="col-sm-2" >
                		<img src="{{ asset( $seo->meta_icon) }}">
                	</div>
                </div>
              </div>
             
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

<img src={{asset('public/backend/images/logo/5ff315d0b26b2.png')}} width="" height="" alt=""/>
{{-- <img src="{{ asset('public/backend/images/logo/5ff315d0b26b2.png') }}" /> --}}

@endsection