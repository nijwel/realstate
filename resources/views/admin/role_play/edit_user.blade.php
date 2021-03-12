@extends('layouts.admin')
@section('add.service','active')
@section('admin_content')

<div class="content-wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Service
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('all.user') }}"> All User</a></li>
      <li class="breadcrumb-item active">Edit Service</li>
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
  <div class="box">
  <div class="box-body">
  	<div class="box-header">
  	  <a href="{{ route('all.user') }}" class="btn btn-success pull-right ">
  	    All User
  	  </a>
  	</div>
    <form action="{{ route('update.user',$user->id) }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="row form-group">
              <div class="col-md-6" >
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" readonly="" value="{{ $user->name }}" required="" name="name">
                </div>
              </div>
              <div class="col-md-3" >
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" readonly="" value="{{ $user->email }}" required="" name="email">
                </div>
              </div>
              <div class="col-md-3" >
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" readonly="" value="{{ $user->mobile }}" required="" name="mobile">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control" value="{{ $user->designation }}" required="" name="designation"> 
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" readonly="" required="" name="password"> 
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <img src="{{ asset($user->image) }}" style="width: 100px; height: auto;">
                  <br>
                  <label>Image</label>
                </div>
              </div>
            </div>
            <br>
            <div class="box">
              <div class="row">
                <div class="col-md-3" >
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->home == 1) checked="" @endif name="home" id="Checkbox_1">
                    <label for="Checkbox_1">Home</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->c_proposal == 1) checked="" @endif name="c_proposal" id="Checkbox_2">
                    <label for="Checkbox_2">Client Proposal</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->p_setting == 1) checked="" @endif name="p_setting" id="Checkbox_3">
                    <label for="Checkbox_3">Property Setting</label>
                  </div>
                </div>
                <div class="col-md-3" >
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->property == 1) checked="" @endif name="property" id="Checkbox_4">
                    <label for="Checkbox_4">Prpperty</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->about_us == 1) checked="" @endif name="about_us" id="Checkbox_5">
                    <label for="Checkbox_5">About Us</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->blog == 1) checked="" @endif name="blog" id="Checkbox_6">
                    <label for="Checkbox_6">Blog</label>
                  </div>
                </div>
                <div class="col-md-3" >
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->service == 1) checked="" @endif name="service" id="Checkbox_7">
                    <label for="Checkbox_7">Others Service</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->messege == 1) checked="" @endif name="messege" id="Checkbox_8">
                    <label for="Checkbox_8">Messeges</label>
                  </div>
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->setting == 1) checked="" @endif name="setting" id="Checkbox_9">
                    <label for="Checkbox_9">Setting</label>
                  </div>
                </div>
                <div class="col-md-3" >
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->seo == 1) checked="" @endif name="seo" id="Checkbox_10">
                    <label for="Checkbox_10">Seo</label>
                  </div>
                  @if(Auth::user()->type == 1)
                  <div class="checkbox">
                      <input type="checkbox" value="1" @if($user->role_play == 1) checked="" @endif name="role_play" id="Checkbox_11">
                    <label for="Checkbox_11">Role Play</label>
                  </div>
                  @else
                    <div class="checkbox">
                      <input type="checkbox" value="1" disabled="" @if($user->role_play == 1) checked="" @endif name="role_play" id="Checkbox_11">
                    <label for="Checkbox_11">Role Play</label>
                  </div>
                  @endif
                  {{-- <div class="checkbox">
                      <input type="checkbox" id="Checkbox_12">
                    <label for="Checkbox_12">Checkbox 1</label>
                  </div> --}}
                </div>
              </div>
            </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary float-right">Update</button>
          </div>
        </form>
  </div>
  </div>
 </div>
</div>

@endsection