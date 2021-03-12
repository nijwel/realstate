@extends('welcome')
@section('content')
@php
  $category=App\Model\Category::all();
@endphp
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="">
    <h1>Other's Service</h1>
  </div>
</div>
<!--Inner Heading End-->
<div class="property-wrap wow fadeInUp">
    <ul class="row">
      @foreach($service as $row)
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('single-others-service-'.$row->title_slug) }}"><img alt="" src="{{ asset($row->image) }}" style="height: 300px;"></a>
          </div>
          <h3><a href="{{ URL::to('single-others-service-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
          <p>{!! Str::limit($row->short, 200) !!}</p>
        </div>
      </li>
      @endforeach 
    </ul>
    <div>{{ $service->links() }}</div>
</div>

@endsection