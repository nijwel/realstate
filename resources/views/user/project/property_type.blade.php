@extends('welcome')
@section('content')
@php
  $category=App\Model\Category::all();
@endphp
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="">
    <h1>{{ $type->subcategory_name }}</h1>
  </div>
</div>
<!--Inner Heading End-->
<div class="property-wrap wow fadeInUp">
    <ul class="row">
      @foreach($p_type as $row)
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('property-details-'.$row->title_slug) }}"><img alt="" src="{{ asset($row->image) }}" style="height: 300px;"></a>
          </div>
          <h3><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $row->name }}</div>
          <div class="rent_info">
            <div class="apart">{{ $row->category_name }}</div>
            @if($row->business_type == 1)
            <div class="sale">For Sale</div>
            @else
            <div class="sale">For Rent</div>
            @endif
          </div>
        </div>
      </li>
      @endforeach 
    </ul>
</div>

@endsection