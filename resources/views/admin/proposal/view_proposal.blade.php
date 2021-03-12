@extends('layouts.admin')
@section('admin_content')
  @if($proposal->status == 0)
  @section('pending','active')
  @elseif($proposal->status == 1)
  @section('success','active')
  @elseif($proposal->status == 2)
  @section('reject','active')
  @endif

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Proposal
      </h1>
      @if($proposal->status == 0)
      <h1 class="text-center text-warning">
        <span style="font-size: 20px;" ><u>Panding</u></span>
        <hr>
      </h1>
      @elseif($proposal->status == 1)
      <h1 class="text-center text-success">
        <span style="font-size: 20px;" ><u>Success</u></span>
        <hr>
      </h1>
      @elseif($proposal->status == 2)
      <h1 class="text-center text-danger">
        <span style="font-size: 20px;" ><u>Reject</u></span>
        <hr>
      </h1>
      @endif
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        @if($proposal->status == 0)
        <li class="breadcrumb-item"><a href="{{ route('pending') }}"> Panding</a></li>
        @elseif($proposal->status == 1)
        <li class="breadcrumb-item"><a href="{{ route('success') }}"> Success</a></li>
        @elseif($proposal->status == 2)
        <li class="breadcrumb-item"><a href="{{ route('reject') }}"> Reject</a></li>
        @endif
        <li class="breadcrumb-item active">View Proposal</li>
      </ol>
    </section>
      <br>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Proparty Details</h3>
            <p class="pull-right">{{ $proposal->created_at->format('d-M-y g:i A') }}</p>
              <hr>
          </div>
            <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="table-responsive">
              <table class="table table-striped">
              <tr>
                <td>1.</td>
                <th>Title :</th>
                <td>{{ $proposal->title }}</td>
              </tr>
              <tr>
                <td>2.</td>
                <th>Proparty Status :</th>
                <td>{{ $proposal->business_type }}</td>
              </tr>
              <tr>
                <td>3.</td>
                <th>Proparty Category :</th>
                <td>{{ $proposal->category_name }}</td>
              </tr>
              <tr>
                <td>4.</td>
                <th>Proparty Size :</th>
                <td>{{ $proposal->size }} Sqft</td>
              </tr>
              <tr>
                <td>5.</td>
                <th>Proparty Bed Room :</th>
                <td>{{ $proposal->room }} Bed Room</td>
              </tr>
              <tr>
                <td>6.</td>
                <th>Proparty Address :</th>
                <th>{{ $proposal->p_address }}</th>
              </tr>
              <tr>
                <td></td>
                <th>Area</th>
                <th>State</th>
                <th>City</th>
                <th>Zip</th>
              </tr>
              <tr>
                <td></td>
                <td>{{ $proposal->location }}</td>
                <td>{{ $proposal->state }}</td>
                <td>{{ $proposal->city }}</td>
                <td>{{ $proposal->zip }}</td>
              </tr>
              </table>
            </div>
          </div>
            <!-- /.box-body -->
            <div class="box-header">
              <h3 class="box-title">Sender Details</h3>
                <hr>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive">
                <table class="table table-striped">
                <tr>
                  <td>1.</td>
                  <th>Name :</th>
                  <td>{{ $proposal->name }}</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <th>Contact No :</th>
                  <td>{{ $proposal->phone }}</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <th>Email :</th>
                  <td>{{ $proposal->email }}</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <th>Address:</th>
                  <td>{{ $proposal->address }}</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <th>Details :</th>
                  <td>{{ $proposal->description }}</td>
                </tr>
                </table>
              </div>
            </div>
            @if($proposal->status == 0)
            <div class="box-body no-padding">
              <div class="table-responsive">
                <a class="btn btn-success" href="{{ route('accept.proposal',$proposal->id) }}">Accept</a>
                <a class="btn btn-danger pull-right" href="{{ route('denay.proposal',$proposal->id) }}">Reject</a>
              </div>
            </div>
            @elseif($proposal->status == 1)
            <div class="box-body no-padding">
              <div class="table-responsive">
                <a class="btn btn-danger pull-right" href="{{ route('denay.proposal',$proposal->id) }}">Reject</a>
              </div>
            </div>
            @elseif($proposal->status == 2)
            @endif
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <div class="box"><img alt="Image Not Available" src="{{ asset($proposal->image) }}" style="width: 100%; height: 300px;"></div>
          <br>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Reply To Sender</h3>
              </div>
              <!-- /.box-header -->
              <form action="{{ route('email.send') }}" method="post" >
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <input class="form-control" name="person" value="{{ $proposal->email }}">
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="subject" placeholder="Subject:">
                  </div>
                  <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /. box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection