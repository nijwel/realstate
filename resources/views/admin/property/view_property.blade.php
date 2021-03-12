@extends('layouts.admin')
@section('all.property','active')
@section('admin_content')
<!--Inner Content Start-->
<div class="content-wrapper">
<section class="content-header">
  <h1>
    Property Details
  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('all.property') }}"> All Property</a></li>
    <li class="breadcrumb-item active">Details Property</li>
  </ol>
</section>
<div class="content">
    <div class="row">
    	<div class="col-lg-8">
		    <img alt="" src="{{ asset($property->image) }}" style="width: 100%; height: 360px;" />
    	</div>
      <div class="col-lg-4" >
        <ul>
          @php
          $images = json_decode($property->images,true);
          @endphp
          @if($images!==NULL)
           @foreach($images as $key => $image) 
              <img alt="" src="{{asset($image)}}" style="width: 120px" height="80px;"/>
           @endforeach
          @endisset
        </ul>
        </div>
      </div>
        <div class="property_details">
          <div class="row property_head wow fadeInUp">
            <div class="col-lg-8 col-md-8">
              <h3>{{ $property->title }} | {{ $property->category_name }} | {{ $property->subcategory_name }}</h3>
              <div class="property_address"> <i class="fa fa-map-marker"></i>  {{ $property->name }} | <span class="pull-right" ><i class="fa  fa-square-o"></i>  {{ $property->size }} Sqft</span></div>
            </div>
          </div>
          <div class="property_widget wow fadeInUp">
            <h3 class="desc_head">Description</h3>
             	{!! $property->description !!}
          </div>
          <div class="row" >
            <div class="col-lg-6">
              <h3 class="desc_head">Property Details</h3>
              <div class="row prop_del">
                <div class="col-lg-6">
                  <ul class="property_list">
                    {!! $property->details !!}
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
                <h3 class="desc_head">Features</h3>
                <ul class="list-unstyled icon-checkbox">
                  <li>{!! $property->featurs !!}</li>
                </ul>
            </div>
          </div>
          <div>
            <h3 class="desc_head">Floor Plan</h3>
            <ul>
              @php
              $floor_plan = json_decode($property->floor_plan,true);
              @endphp
              @if($floor_plan!==NULL)
               @foreach($floor_plan as $key => $image) 
                  <img alt="" src="{{asset($image)}}" style="width: 120px" height="80px;"/>
               @endforeach
              @endisset
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

<!--Inner Content End--> 