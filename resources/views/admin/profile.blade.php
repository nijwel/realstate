@extends('layouts.admin')

@section('admin_content')
<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >

      <div class="row">
        <div class="col-xl-8 col-lg-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="{{ asset(Auth::user()->image) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">Super Admin</p>
				
              
            
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
						<p>Email address </p>
						<h6 class="margin-bottom">{{ Auth::user()->email }}</h6>
						<p>Phone</p>
						<h6 class="margin-bottom">{{ Auth::user()->mobile }}</h6> 
						<div class="">
							<a href="{{ route('admin.edit_profile') }}" class=" col-4 btn btn-primary" style="border-radius: 5px;" >Edit Profile</a>

              <a href="{{ route('admin.change_password') }}" class=" col-6 btn btn-success pull-right" style="border-radius: 5px;" >Change Paswrd</a>
						</div>  
					</div>
             	</div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
@endsection