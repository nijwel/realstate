@extends('layouts.admin')

@section('admin_content')

<div class="content-wrapper">

@php
  $ongoing=App\Model\Property::where('type_id',3)->get();
  $upcoming=App\Model\Property::where('type_id',2)->get();
  $complete=App\Model\Property::where('type_id',1)->get();
  $all=App\Model\Property::get();
  $blog=App\Model\Blog::all();
  $place=App\Model\Popular_place::all();
  $service=App\Model\Service::all();
  $user=App\Admin::all();
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon push-bottom"><i class="fa fa-building-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($complete) }} <span style="font-size: 15px;">Property</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Complete
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-purple">
          <span class="info-box-icon push-bottom"><i class="fa fa-arrow-left"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($ongoing) }} <span style="font-size: 15px;">Property</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Ongoing
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-green">
          <span class="info-box-icon push-bottom"><i class="fa fa-arrow-right"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($upcoming) }} <span style="font-size: 15px;">Property</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Upcoming
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-red">
          <span class="info-box-icon push-bottom"><i class="fa fa-line-chart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($all) }} <span style="font-size: 15px;">Property</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Total
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <br>
    <div class="row">
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon push-bottom"><i class="fa fa-pencil-square-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($blog) }} <span style="font-size: 15px;">Blog</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Total
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-purple">
          <span class="info-box-icon push-bottom"><i class="fa fa-user-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($user) }} <span style="font-size: 15px;">User</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Total
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-green">
          <span class="info-box-icon push-bottom"><i class="fa fa-map-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($place) }} <span style="font-size: 15px;">Popular</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Place
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-3 col-md-6 col-12">
        <div class="info-box bg-red">
          <span class="info-box-icon push-bottom"><i class="fa fa-wrench"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"></span>
            <span class="info-box-number">{{ count($service) }} <span style="font-size: 15px;">Service</span> </span>

            <div class="progress">
              <div class="progress-bar" style=""></div>
            </div>
            <span class="progress-description">
                  Total
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <br>
    <hr>
    @php
        $proposal=App\Model\Proposal::join('categories','proposals.category','categories.id')
                                  ->join('sizes','proposals.size','sizes.id')
                                  ->select('proposals.*','categories.category_name','sizes.size')->limit(10)->orderBy('id','DESC')->get();
    @endphp
    <div class="row">
            
      <div class="col-xl-12">
          <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Last 10 Proposal</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                  <th>Location</th>
                  <th>Category</th>
                  <th>BedRoom</th>
                  <th>Size</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proposal as $row)
                <tr>
                  <td>{{ $row->location }}</td>
                  <td>{{ $row->category_name }}</td>
                  <td>{{ $row->room }} Bed Room</td>
                  <td>{{ $row->size }} Sqft</td>
                  <td>
                    @if($row->business_type == 1)
                    <span class="text-green">For Sale</span>
                    @elseif($row->business_type == 0)
                    <span >For Rent</span>
                    @endif
                  </td>
                  <td>{{ $row->created_at->format('d-M-y') }}</td>
                  <td>
                    @if($row->status == 0)
                    <span class="badge bg-warning p-1">Panding</span>
                    @elseif($row->status == 1)
                    <span class="badge bg-success p-1">Success</span>
                    @elseif($row->status == 2)
                    <span class="badge bg-danger p-1">Reject</span>
                    @endif
                  </td>
                  <td><a class="btn-sm btn-info" href="{{ route('view.proposal',$row->id) }}">View</a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            {{-- <a href="{{ route('all.property') }}" class="btn btn-sm btn-info pull-left">View All Property</a> --}}
           {{--  <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">View All Orders</a> --}}
          </div>
          <!-- /.box-footer -->
        </div>
      </div>      
    </div>
    <!-- /.row -->

    
</section>
  <!-- /.content -->
</div>
</div>
@endsection
