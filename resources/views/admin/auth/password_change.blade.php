@extends('layouts.admin')

@section('admin_content')

<div class="content-wrapper">
 <!-- Content Wrapper. Contains page content -->
  <div class="content form-control ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Password Change
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profile</a></li>
        <li class="breadcrumb-item active">Password Change</li>
      </ol>
    </section>
    <section class="content" >
    <div class="row" >
     <div class="col-8 " style="padding: 20px;" >
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form action="{{ route('admin.update_password') }}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="panel-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Old Password <span class="text-danger" >*</span> </label>
                           <div class="col-sm-9">
                             <input id="oldpass" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
                           </div>
                        </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1" class="col-sm-4 control-label" >New Password <span class="text-danger" >*</span></label>
                             <div class="col-sm-9">
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                             </div>

                             @if ($errors->has('oldpass'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong class="text-danger">{{ $errors->first('oldpass') }}</strong>
                                 </span>
                             @endif
                         </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-6 control-label"> Confirm Password<span class="text-danger" >*</span></label>
                            <div class="col-sm-9">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Country</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->country }}"  required="" name="country">
                           </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">City</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->city }}"  required="" name="city">
                           </div>
                        </div>
                <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ Auth::user()->gender }}"  required="" name="gender">
                           </div>
                        </div> --}}
                </div> <!-- panel-body -->
      </div>
        <div class="box-footer center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
   
    <!-- /.box -->
  </div>
   <!-- /.content-wrapper -->
</div>
@endsection
