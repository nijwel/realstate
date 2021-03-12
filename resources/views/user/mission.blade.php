@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Mission & Vission</h1>
  </div>
</div>
<!--Inner Heading End--> 
@php
	$mission=App\Model\MissionVission::first();
@endphp
<!--Inner Content Start-->
<div class="mission" style=" background: #B0BEC5; " >
<div class="innercontent">
  <div class="container">
    <div class="row aboutWrap">
      <div class="col-lg-6">
        <div class="about_box">
          <div class="title">
            <h3 style="font-family: Segoe Print; color: white;"><b>{{ $mission->title_1 }}</b></h3>
          </div>
          <p>{!! $mission->details_1 !!}</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="aboutImg text-center"><img alt="" src="{{ asset($mission->image_1) }}" style="box-shadow: 0 2px 5px 0;"></div>
      </div>
    </div>
  </div>
</div>
<h1 class="text-center" style="font-size: 150px; margin-top: -90px; height: 110px; font-family: Segoe Print; color: #BCC7CD;">&</h1>
<div class="innercontent">
  <div class="container">
    <div class="row aboutWrap">
      <div class="col-lg-6">
        <div class="aboutImg text-center"><img alt="" src="{{ asset($mission->image_2) }}" style="box-shadow: 0 2px 5px 0;"></div>
      </div>
      <div class="col-lg-6">
        <div class="about_box">
          <div class="title">
            <h3 style="font-family: Segoe Print; color: white;"><b>{{ $mission->title_2 }}</b></h3>
          </div>
          <p>{!! $mission->details_2 !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection