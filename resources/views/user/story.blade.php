@extends('welcome')
@section('content')

@php
  $story=App\Model\Story::first();
@endphp
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Our Story</h1>
  </div>
</div>
<!--Inner Heading End-->

<!--Inner Content Start-->
<section class="first" >
  {{-- <div class="innercontent"> --}}
    <div class="">
      <div class="row aboutWrap">
        <div class="col-lg-6">
          <div class="aboutImg"><img alt="" src="{{ asset($story->image_1) }}"></div>
        </div>
        <div class="col-lg-6 container">
          <div class="about_box">
            <div class="title">
              <h3>{{ $story->title_1 }}</h3>
            </div>
            <p>{!! $story->details_1 !!}</p>
          </div>
        </div>
      </div>
    </div>
  {{-- </div> --}}
</section>
<section class="second" >
  <div class="innercontent">
    <div class="container">
      <div class="row aboutWrap">
        <div class="col-lg-6">
          <div class="title">
            <h3>{{ $story->title_2 }}</h3>
          </div>
          <br>
          <div class="aboutImg"><img alt="" src="{{ asset($story->image_2) }}"></div>
        </div>
        <div class="col-lg-6">
          <div class="about_box">
           <p>{!! $story->details_2 !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="third" style="background-image: -webkit-linear-gradient(rgba(0,0,0, 0) -25%,rgba(0,0,0.10) 80%),url(<?php echo $story->image_3 ?>);" >
  <div class="innercontent">
    <div class="container">
      <div class="row aboutWrap">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
          <div class="about_box">
            <div class="title">
              <h3>{{ $story->title_3 }}</h3>
            </div>
            <p>{!! $story->details_3 !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fourth" id="fourth" >
  <div class="innercontent">
    <div class="container">
      <div class="row aboutWrap">
        <div class="col-lg-6">
          <div class="title">
            <h3>{{ $story->title_4 }}</h3>
          </div>
          <div class="aboutImg"><img alt="" src="{{ asset($story->image_4) }}"></div>
        </div>
        <div class="col-lg-6">
          <div class="about_box">
            <p>{!! $story->details_4 !!}</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Inner Content End--> 


@endsection