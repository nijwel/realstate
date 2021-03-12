@extends('welcome')
@section('content')
<!--Inner Heading Start-->
<link rel="stylesheet" href="{{ asset('public/frontend/css/flexslider.css') }}">

<div class="innerHeading">
  <div class="container">
    <h1>Property Details</h1>
  </div>
</div>
<!--Inner Heading End--> 
@php
  $category=App\Model\Category::all();
  $type=App\Model\Subcategory::all();
  $location=App\Model\Popular_place::all();
  $size=App\Model\Size::all();
@endphp
<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <form action="{{ route('search_property') }}" method="get" >
          <div class="sidebar_form card card-body  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="input-group">
              <input type="text" name="title" class="form-control" placeholder="Keyword">
              <div class="hover_icon"><a href="#"><i class="fas fa-search"></i></a></div>
            </div>
            <div class="input-group">
              <select class="wide select_option" name="location_id" style="display: none;">
                <option data-display="Property Location"></option>
                @foreach($location as $row)
                <option value="{{ $row->id }}" >{{ $row->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group">
              <select class="wide select_option" name="size_id" style="display: none;">
                <option data-display="Property Size"></option>
                @foreach($size as $row)
                <option value="{{ $row->id }}" >{{ $row->size }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group">
              <select class="wide select_option" name="category_id" style="display: none;">
                <option data-display="Property Category"></option>
                @foreach($category as $row)
                <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group">
              <select class="wide select_option" name="type_id" style="display: none;">
                <option data-display="Property Type"></option>
                @foreach($type as $row)
                <option value="{{ $row->id }}">{{ $row->subcategory_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group">
              <select class="wide select_option" name="business_type" style="display: none;">
                <option data-display="Property Status"></option>
                <option value="1">For Sale</option>
                <option value="0">For Rent</option>
              </select>
            </div>
            <div class="input-group">
              <input type="submit" class="submit" value="Search">
            </div>
          </div>
        </form>
        @php
          $type=App\Model\Subcategory::all();
        @endphp
        <div class="single-widgets widget_category mt30 fadeInUp wow">
          <h4>Property Type</h4>
          <ul>
            @foreach($type as $row)
            @php
              $p_type_count=App\Model\Property::where('type_id',$row->id)->get();
            @endphp
            <li><a href="{{ URL::to('property-types-'.$row->type_slug) }}">{{ $row->subcategory_name }} <span>{{ count($p_type_count) }}</span></a></li>
            @endforeach
          </ul>
        </div>
        @php
          $recent_property=App\Model\Property::limit(3)->orderBy('id','DESC')->get();
        @endphp
          <div class="single-widgets widget_category fadeInRight wow">
            <h4>Recents Property</h4>
            <ul class="property_sec">
              @foreach($recent_property as $row)
              <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img src="{{ asset($row->image) }}" style="width: 100px; height: 80px;"></div>
                  <div class="property_info">
                    <h4><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->title }}</a></h4>
                    
                    <div class="priceWrp">
                      @if($row->business_type == 1)
                         <div>For Sale</div>
                      @else
                         <div>For Rent</div>
                      @endif</div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
      </div>
      <div class="col-lg-8"> 
        <!-- Place somewhere in the <body> of your page -->
        <div id="slider" class="flexslider wow fadeInUp">
          <ul class="slides">
             @php
             $images = json_decode($data->images,true);
             @endphp
             @if($images!==NULL)
              @foreach($images as $key => $image) 
                <li> <img alt="" src="{{asset($image)}}" style="height: 400px;" /> </li>
              @endforeach
             @endisset 
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
        <div id="carousel" class="flexslider wow fadeInUp">
          <ul class="slides">

             @php
             $images = json_decode($data->images,true);
             @endphp
             @if($images!==NULL)
              @foreach($images as $key => $image) 
                <li> <img alt="" src="{{asset($image)}}" style="height: 100px;" /> </li>
              @endforeach
             @endisset 
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
        <div class="property_details">
          <div class="row property_head wow fadeInUp">
            <div class="col-lg-8 col-md-8">
              <h3>{{ $data->title }}</h3>
              <div class="property_size"><i class="fas fa-map-marker-alt" ></i> {{ $data->name }} | <i class="fas fa-square" ></i> {{ $data->size }} Sqft</div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="heart_info">
                <div class="property_price">|{{ $data->category_name }}</div>
                <div class="property_price">|{{ $data->subcategory_name }}</div>
              </div>
            </div>
          </div>
          <div class="property_widget wow fadeInRight" style="margin-top: 50px;">
            {!! $data->video_link !!}
          </div>
        </div>
      </div>
    </div>
    <div class="property_widget wow fadeInUp">
      <h3 class="desc_head">Description</h3>
      {!! $data->description !!}
    </div>
    <div class="row">
        <div class="property_widget wow fadeInUp col-lg-6 col-md-12">
          <h3 class="desc_head">Property Details</h3>
          <div class="row prop_del">
            <div class="">
              <ul class="property_list">
                {!! $data->details !!}
              </ul>
            </div>
          </div>
        </div>
        <div class="property_widget wow fadeInUp col-lg-6 col-md-12">
          <h3 class="desc_head">Features</h3>
          <ul class="list-unstyled icon-checkbox">
              {!! $data->featurs !!}
          </ul>
        </div>
    </div>
        <div class="property_widget wow fadeInUp">
          <h3 class="desc_head">Floor PLans</h3>
          <div class="floor_plans faqs">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse5">Floor Plans <i class="fa fa-arrow-circle-down"></i></a></h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <ul class="panel-body row">
                    @php
                    $floor_plan = json_decode($data->floor_plan,true);
                    @endphp
                    @if($floor_plan!==NULL)
                     @foreach($floor_plan as $key => $image) 
                       <li> <img class=" col-md-12" alt="" src="{{asset($image)}}" style=" width: 550px;height: auto; padding: 10px; " /> </li>
                     @endforeach
                    @endisset
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="map">
            {!! $data->map !!}
          </div>
        </div>
        <br>
        <div class="getTouch text-center">Contact Us</div>
        <div class="">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form class="form mb-md50" id="contact-form" method="post" action="{{ route('send.messege') }}">
            @csrf
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group has-error has-danger">
                    <input id="form_name" class="form-control" required="" type="text" name="name" placeholder="Name">
                  </div>
                </div>
                <input hidden="" value="{{ $data->id }}" required="" type="text" name="title" placeholder="Name">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_email" class="form-control" type="email" name="email" placeholder="Email" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_phone" class="form-control"  type="text" name="phone" placeholder="Phone" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_subject" class="form-control" type="text" name="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea id="form_message" class="form-control"  name="messege" placeholder="Message" rows="4" required=""></textarea>
                  </div>
                </div>
                <div class="col-lg-12 contact-wrap">
                  <div class="contact-btn">
                    <button type="submit" class="sub">Submit Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>




<!--Inner Content End--> 
@endsection