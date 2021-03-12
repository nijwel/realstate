@extends('layouts.admin')
@section('admin_content')

@if($messege->status == 0)
@section('unread.messege','active')
@else
@section('read.messege','active')
@endif
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Messege
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('read.messege') }}"> Messege</a></li>
        <li class="breadcrumb-item active">View Messege</li>
      </ol>
    </section>
    <section class="content">
          @if($messege->title == null)
            <h3 class="text-center" >From: Contact Page</h3>
          @else
          <h3 class="text-center" >From: {{ $messege->title }}</h3>
          @endif
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <hr>
          <p> Sender Name:- {{ $messege->name }}</p>
          <p> Mobile:- {{ $messege->phone }}</p>
          <p> Email:- {{ $messege->email }}</p>
          <hr>
          <p> Subject:- {{ $messege->subject }}</p>
          <hr>
          <p> <b>Messege:-</b>  {{ $messege->messege }}</p>
        </div>
        <div class="col-md-12 col-lg-6">
          <div>
            @if($messege->image == null)
            @else
                <div style="width: 450px; padding: 10px;" class="float-right" >
                  <img src="{{ asset($messege->image) }}" style="width: 100%; height: auto;">
                  <br>
                  <br>
                  <span style="font-size: 16px;" >{{ $messege->created_at->format('d-M-y , g:i A') }}</span>
                  <a class="btn-sm btn-info pull-right" target="blank" href="{{ route('view.property',$messege->id) }}">View</a>
                </div>
            @endif
          </div>
          <br>
          <div>
              <h3 style="padding: 10px; ">Reply To Sender</h3>
            <!-- /.box-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('email.send') }}" method="post" >
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <input class="form-control" name="person" value="{{ $messege->email }}">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Subject:">
                </div>
                <div class="form-group">
                  <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px" required>
                  </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection