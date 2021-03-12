@extends('welcome')
@section('content')
@php
  $category=App\Model\Category::all();
@endphp
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="">
    <h1>Ongoing Project</h1>
  </div>
</div>
<!--Inner Heading End-->
<div class="property-wrap wow fadeInUp">
  <div class="">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>
      @foreach($category as $row)
      <button class="tablinks" onclick="openCity(event, '{{ $row->id }}')">{{ $row->category_name }}</button>
      @endforeach
      {{-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> --}}
    </div>
  </div>
  @php
    $type=App\Model\Subcategory::first();
  @endphp
  <div id="London" class="tabcontent">
    <!--Row Start-->
    @php
      $ongoing=App\Model\Property::leftjoin('categories','properties.category_id','categories.id')->leftjoin('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('type_id',$type->id)->orderBy('id','DESC')->paginate(12);
    @endphp
    <ul class="row">
      @foreach($ongoing as $row)
      <!--col-lg-4 Start-->
      <li class="col-lg-4 col-sm-6">
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
      <!--col-lg-4 End-->  
    </ul>
    <!--Row End-->
    <div class="float-right text-center">{{ $ongoing->links() }}</div>
  </div>

  @foreach($category as $row)
  <div id="{{ $row->id }}" class="tabcontent">
    <!--Row Start-->
    @php
      $type=App\Model\Subcategory::first();
      $cat_property=App\Model\Property::leftjoin('categories','properties.category_id','categories.id')->leftjoin('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('category_id',$row->id)->where('type_id',$type->id)->orderBy('id','DESC')->paginate(12);
    @endphp
    <ul class="row">
      <!--col-lg-4 Start-->
      @foreach($cat_property as $row)
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
      <!--col-lg-4 End--> 
    </ul>
    <!--Row End-->
    <div class="float-right text-center">{{ $cat_property->links() }}</div> 
  </div>
  @endforeach
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endsection