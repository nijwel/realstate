@extends('welcome')
@section('content')
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="">
    <h1>Service Details</h1>
  </div>
</div>
<!--Inner Heading End-->
<div class="property-wrap wow fadeInUp">
  <div class="row">
	<div class=" col-lg-6 col-md-12 " >
		<img src="{{ asset($service->image) }}" style="box-shadow: 0 5px 15px 0;">
		<br><br>
			<h3 style="margin-left: 15px;">{{ $service->title }} | <span style="color: #FFB900;" >{{ $service->service_name }}</span></h3>
	</div>
	<div class="col-lg-5 col-md-12" style="color: gray; margin-left:10px;" >
		<h3>Short Description</h3>
		{!! $service->short !!}
	</div>
  </div>
</div>
<h3 class="property-wrap wow fadeInUp text-center" style="margin:-80px 0 0 15px;"> <span style="color: #FFB900; font-size: 40px; " >G</span>allery</h3>
<div class="" style="margin-top: -70px;">
    <ul class="row">
      @php
      	$images = json_decode($service->images,true);
      @endphp
      @if($images!==NULL)
       @foreach($images as $key => $image)
      	<li class="col-lg-3 col-md-6">
          <div class="property_box wow fadeInUp">
          	<div class="propertyImg"><img alt="" src="{{asset($image)}}" />
          	</div>
          </div>
      	</li>
     	@endforeach
        @endisset
    </ul>
</div>
<div class="container" >
	<div class=" wow fadeInUp ">
		<h3 class="property-wrap wow fadeInUp text-center" style="margin:-40px 0 0 15px;"> <span style="color: #FFB900; font-size: 40px; " >D</span>escription</h3>
		<div class="wow" style="margin-top: -40px;" >
			{!! $service->details !!}
		</div>
	</div>
</div>

@endsection