{{-- @extends('welcome')
@section('content')

@php
  $slider=App\Model\Slider::limit(5)->get();
@endphp
<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
      @foreach($slider as $row)
      <li data-slotamount="7"  data-masterspeed="1000" data-saveperformance="on"> <img alt="" alt="" src="{{ asset($row->image) }}" data-lazyload="{{ asset($row->image) }}">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="150" data-speed="600" data-start="2200"><span>{{ $row->title }}</div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2800">{{ $row->description }}</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="340" data-speed="600" data-start="3500"><a href="{{ route('contact') }}">Contact Us </a></div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

@php
  $category=App\Model\Category::all();
  $type=App\Model\Subcategory::all();
  $location=App\Model\Popular_place::all();
  $size=App\Model\Size::all();
@endphp
<!--Form Start-->
<div class="form_sec slider-wrap  wow fadeInUp">
  <div class="container">
    <div class="form-wrap">
      <form action="{{ route('search_property') }}" method="get" >
        <div class="row" >
          <div class="col-lg-5">
            <div class="input-group origin">
              <input type="text" name="title" class="form-control" placeholder="Enter Property Title, Location, Category ..." >
            </div>
          </div>
          <div class="input-group col-lg-4">
            <select class="nice-select form-control wide select_option" name="location_id">
              <option data-display="Location"></option>
              @foreach($location as $row)
              <option value="{{ $row->id }}" >{{ $row->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group col-lg-3">
            <select class="nice-select form-control wide select_option" name="size_id">
              <option data-display="By Size (Sqft)"></option>
              @foreach($size as $row)
              <option value="{{ $row->id }}" >{{ $row->size }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group col-lg-3 end_date">
            <select class="nice-select form-control wide select_option" name="category_id">
              <option data-display="Property Category"></option>
              @foreach($category as $row)
              <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group col-lg-3 economy">
            <select class="nice-select form-control wide select_option" name="type_id" >
              <option data-display="Property Type"></option>
              @foreach($type as $row)
              <option value="{{ $row->id }}">{{ $row->subcategory_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group col-lg-4 economy">
            <select class="nice-select form-control wide select_option" name="business_type">
              <option data-display="Property Status"></option>
              <option value="1">For Sale</option>
              <option value="0">For Rent</option>
            </select>
          </div>
          <div class="input-group col-lg-2">
            <button type="submit" class="submit" value="Search" ><i class="fa fa-search" aria-hidden="true"></i> Search</button>
          </div>
        </div>
      </form>
    </div>
   </div>
</div>
<!--Form End-->
<!--Properties Start-->
<div class="property-wrap wow fadeInUp">
    <div class="title">
      <h1>Featured Properties</h1>
    </div>
 @php
   $property1=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->first();
   $property2=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(1)->first();
   $property3=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(2)->first();
   $property4=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(3)->first();
   $property5=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(4)->first();
   $property6=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(6)->first();
   $property7=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(7)->first();
   $property8=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(8)->first();
   $property9=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(9)->first();
   $property10=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->orderBy('id','DESC')->skip(10)->first();
 @endphp
 <div class="">
   <div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
           <ul class="row">
              @if($property1 !== NULL)  
                @if($property1->front_page == 1)
                <li class="col-lg-6 col-md-6">
                   <div class="property_box wow fadeInUp">
                     <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property1->title_slug) }}"><img alt="" src="{{ asset($property1->image) }}" style="height: 400px;"></a>
                     </div>
                     <h3><a href="{{ URL::to('property-details-'.$property1->title_slug) }}">{{ $property1->title }}</a></h3>
                     <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property1->name }}</div>
                     <div class="rent_info">
                       <div class="apart">{{ $property1->category_name }}</div>
                       @if($property1->business_type == 1)
                       <div class="sale">For Sale</div>
                       @else
                       <div class="sale">For Rent</div>
                       @endif
                     </div>
                   </div>
                 </li>
                @endif
             @endif
              @if($property2 !== NULL)  
                @if($property2->front_page == 1)
                <li class="col-lg-6 col-md-6">
                   <div class="property_box wow fadeInUp">
                     <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property2->title_slug) }}"><img alt="" src="{{ asset($property2->image) }}" style="height: 400px;"></a>
                     </div>
                     <h3><a href="{{ URL::to('property-details-'.$property2->title_slug) }}">{{ $property2->title }}</a></h3>
                     <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property2->name }}</div>
                     <div class="rent_info">
                       <div class="apart">{{ $property2->category_name }}</div>
                       @if($property2->business_type == 1)
                       <div class="sale">For Sale</div>
                       @else
                       <div class="sale">For Rent</div>
                       @endif
                     </div>
                   </div>
                 </li>
                @endif
             @endif
           </ul>
       </div>
        <div class="carousel-item">
          <ul class="row">
             @if($property3 !== NULL)  
               @if($property3->front_page == 1)
               <li class="col-lg-6 col-md-6">
                  <div class="property_box wow fadeInUp">
                    <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property3->title_slug) }}"><img alt="" src="{{ asset($property3->image) }}" style="height: 400px;"></a>
                    </div>
                    <h3><a href="{{ URL::to('property-details-'.$property3->title_slug) }}">{{ $property3->title }}</a></h3>
                    <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property3->name }}</div>
                    <div class="rent_info">
                      <div class="apart">{{ $property3->category_name }}</div>
                      @if($property3->business_type == 1)
                      <div class="sale">For Sale</div>
                      @else
                      <div class="sale">For Rent</div>
                      @endif
                    </div>
                  </div>
                </li>
               @endif
            @endif
           @if($property4 !== NULL)  
             @if($property4->front_page == 1)
             <li class="col-lg-6 col-md-6">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property4->title_slug) }}"><img alt="" src="{{ asset($property4->image) }}" style="height: 400px;"></a>
                  </div>
                  <h3><a href="{{ URL::to('property-details-'.$property4->title_slug) }}">{{ $property4->title }}</a></h3>
                  <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property4->name }}</div>
                  <div class="rent_info">
                    <div class="apart">{{ $property4->category_name }}</div>
                    @if($property4->business_type == 1)
                    <div class="sale">For Sale</div>
                    @else
                    <div class="sale">For Rent</div>
                    @endif
                  </div>
                </div>
              </li>
             @endif
          @endif   
           </ul>
       </div>
       <div class="carousel-item">
         <ul class="row">
            @if($property5 !== NULL)  
              @if($property5->front_page == 1)
              <li class="col-lg-6 col-md-6">
                 <div class="property_box wow fadeInUp">
                   <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property5->title_slug) }}"><img alt="" src="{{ asset($property5->image) }}" style="height: 400px;"></a>
                   </div>
                   <h3><a href="{{ URL::to('property-details-'.$property5->title_slug) }}">{{ $property5->title }}</a></h3>
                   <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property5->name }}</div>
                   <div class="rent_info">
                     <div class="apart">{{ $property5->category_name }}</div>
                     @if($property5->business_type == 1)
                     <div class="sale">For Sale</div>
                     @else
                     <div class="sale">For Rent</div>
                     @endif
                   </div>
                 </div>
               </li>
              @endif
           @endif
           @if($property6 !== NULL)  
             @if($property6->front_page == 1)
             <li class="col-lg-6 col-md-6">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property6->title_slug) }}"><img alt="" src="{{ asset($property6->image) }}" style="height: 400px;"></a>
                  </div>
                  <h3><a href="{{ URL::to('property-details-'.$property6->title_slug) }}">{{ $property6->title }}</a></h3>
                  <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property6->name }}</div>
                  <div class="rent_info">
                    <div class="apart">{{ $property6->category_name }}</div>
                    @if($property6->business_type == 1)
                    <div class="sale">For Sale</div>
                    @else
                    <div class="sale">For Rent</div>
                    @endif
                  </div>
                </div>
              </li>
             @endif
            @endif
          </ul>
       </div>
       <div class="carousel-item">
         <ul class="row">
            @if($property7 !== NULL)  
              @if($property7->front_page == 1)
              <li class="col-lg-6 col-md-6">
                 <div class="property_box wow fadeInUp">
                   <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property7->title_slug) }}"><img alt="" src="{{ asset($property7->image) }}" style="height: 400px;"></a>
                   </div>
                   <h3><a href="{{ URL::to('property-details-'.$property7->title_slug) }}">{{ $property5->title }}</a></h3>
                   <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property7->name }}</div>
                   <div class="rent_info">
                     <div class="apart">{{ $property7->category_name }}</div>
                     @if($property7->business_type == 1)
                     <div class="sale">For Sale</div>
                     @else
                     <div class="sale">For Rent</div>
                     @endif
                   </div>
                 </div>
               </li>
              @endif
           @endif
           @if($property8 !== NULL)  
             @if($property8->front_page == 1)
             <li class="col-lg-6 col-md-6">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property8->title_slug) }}"><img alt="" src="{{ asset($property8->image) }}" style="height: 400px;"></a>
                  </div>
                  <h3><a href="{{ URL::to('property-details-'.$property8->title_slug) }}">{{ $property8->title }}</a></h3>
                  <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property8->name }}</div>
                  <div class="rent_info">
                    <div class="apart">{{ $property8->category_name }}</div>
                    @if($property8->business_type == 1)
                    <div class="sale">For Sale</div>
                    @else
                    <div class="sale">For Rent</div>
                    @endif
                  </div>
                </div>
              </li>
             @endif
            @endif
          </ul>
       </div>
       <div class="carousel-item">
         <ul class="row">
            @if($property9 !== NULL)  
              @if($property9->front_page == 1)
              <li class="col-lg-6 col-md-6">
                 <div class="property_box wow fadeInUp">
                   <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property9->title_slug) }}"><img alt="" src="{{ asset($property9->image) }}" style="height: 400px;"></a>
                   </div>
                   <h3><a href="{{ URL::to('property-details-'.$property9->title_slug) }}">{{ $property9->title }}</a></h3>
                   <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property9->name }}</div>
                   <div class="rent_info">
                     <div class="apart">{{ $property9->category_name }}</div>
                     @if($property9->business_type == 1)
                     <div class="sale">For Sale</div>
                     @else
                     <div class="sale">For Rent</div>
                     @endif
                   </div>
                 </div>
               </li>
              @endif
           @endif
           @if($property10 !== NULL)  
             @if($property10->front_page == 1)
             <li class="col-lg-6 col-md-6">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property10->title_slug) }}"><img alt="" src="{{ asset($property10->image) }}" style="height: 400px;"></a>
                  </div>
                  <h3><a href="{{ URL::to('property-details-'.$property10->title_slug) }}">{{ $property6->title }}</a></h3>
                  <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property10->name }}</div>
                  <div class="rent_info">
                    <div class="apart">{{ $property10->category_name }}</div>
                    @if($property10->business_type == 1)
                    <div class="sale">For Sale</div>
                    @else
                    <div class="sale">For Rent</div>
                    @endif
                  </div>
                </div>
              </li>
             @endif
            @endif
          </ul>
       </div>
     </div>
 
   <a class="carousel-control-prev" href="#carouselExampleControl" role="button" data-slide="prev">
     <span style=" padding: 25px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControl" role="button" data-slide="next">
     <span style=" padding: 25px;" class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
     </div>
   </div>   
  </div>
</div>
<!--Properties End--> 

<div class="slideshow-container">

<div class="mySlides">
  <ul class="row">
     @if($property1 !== NULL)  
       @if($property1->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property1->title_slug) }}"><img alt="" src="{{ asset($property1->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property1->title_slug) }}">{{ $property1->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property1->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property1->category_name }}</div>
              @if($property1->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
     @if($property2 !== NULL)  
       @if($property2->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property2->title_slug) }}"><img alt="" src="{{ asset($property2->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property2->title_slug) }}">{{ $property2->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property2->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property2->category_name }}</div>
              @if($property2->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
  </ul>
</div>

<div class="mySlides">
  <ul class="row">
     @if($property3 !== NULL)  
       @if($property3->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property3->title_slug) }}"><img alt="" src="{{ asset($property3->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property3->title_slug) }}">{{ $property3->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property3->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property3->category_name }}</div>
              @if($property3->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
   @if($property4 !== NULL)  
     @if($property4->front_page == 1)
     <li class="col-lg-6 col-md-6">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property4->title_slug) }}"><img alt="" src="{{ asset($property4->image) }}" style="height: 400px;"></a>
          </div>
          <h3><a href="{{ URL::to('property-details-'.$property4->title_slug) }}">{{ $property4->title }}</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property4->name }}</div>
          <div class="rent_info">
            <div class="apart">{{ $property4->category_name }}</div>
            @if($property4->business_type == 1)
            <div class="sale">For Sale</div>
            @else
            <div class="sale">For Rent</div>
            @endif
          </div>
        </div>
      </li>
     @endif
  @endif   
   </ul>
</div>

<div class="mySlides">
  <ul class="row">
     @if($property5 !== NULL)  
       @if($property5->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property5->title_slug) }}"><img alt="" src="{{ asset($property5->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property5->title_slug) }}">{{ $property5->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property5->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property5->category_name }}</div>
              @if($property5->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
   @if($property6 !== NULL)  
     @if($property6->front_page == 1)
     <li class="col-lg-6 col-md-6">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property6->title_slug) }}"><img alt="" src="{{ asset($property6->image) }}" style="height: 400px;"></a>
          </div>
          <h3><a href="{{ URL::to('property-details-'.$property6->title_slug) }}">{{ $property6->title }}</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property6->name }}</div>
          <div class="rent_info">
            <div class="apart">{{ $property6->category_name }}</div>
            @if($property6->business_type == 1)
            <div class="sale">For Sale</div>
            @else
            <div class="sale">For Rent</div>
            @endif
          </div>
        </div>
      </li>
     @endif
  @endif   
   </ul>
</div>
<div class="mySlides">
  <ul class="row">
     @if($property7 !== NULL)  
       @if($property7->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property7->title_slug) }}"><img alt="" src="{{ asset($property7->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property7->title_slug) }}">{{ $property7->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property7->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property7->category_name }}</div>
              @if($property7->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
   @if($property8 !== NULL)  
     @if($property8->front_page == 1)
     <li class="col-lg-6 col-md-6">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property8->title_slug) }}"><img alt="" src="{{ asset($property8->image) }}" style="height: 400px;"></a>
          </div>
          <h3><a href="{{ URL::to('property-details-'.$property8->title_slug) }}">{{ $property8->title }}</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property8->name }}</div>
          <div class="rent_info">
            <div class="apart">{{ $property8->category_name }}</div>
            @if($property8->business_type == 1)
            <div class="sale">For Sale</div>
            @else
            <div class="sale">For Rent</div>
            @endif
          </div>
        </div>
      </li>
     @endif
  @endif   
   </ul>
</div>
<div class="mySlides">
  <ul class="row">
     @if($property9 !== NULL)  
       @if($property9->front_page == 1)
       <li class="col-lg-6 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property9->title_slug) }}"><img alt="" src="{{ asset($property9->image) }}" style="height: 400px;"></a>
            </div>
            <h3><a href="{{ URL::to('property-details-'.$property9->title_slug) }}">{{ $property9->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property9->name }}</div>
            <div class="rent_info">
              <div class="apart">{{ $property9->category_name }}</div>
              @if($property9->business_type == 1)
              <div class="sale">For Sale</div>
              @else
              <div class="sale">For Rent</div>
              @endif
            </div>
          </div>
        </li>
       @endif
    @endif
   @if($property10 !== NULL)  
     @if($property10->front_page == 1)
     <li class="col-lg-6 col-md-6">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ URL::to('property-details-'.$property10->title_slug) }}"><img alt="" src="{{ asset($property10->image) }}" style="height: 400px;"></a>
          </div>
          <h3><a href="{{ URL::to('property-details-'.$property10->title_slug) }}">{{ $property10->title }}</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $property10->name }}</div>
          <div class="rent_info">
            <div class="apart">{{ $property10->category_name }}</div>
            @if($property10->business_type == 1)
            <div class="sale">For Sale</div>
            @else
            <div class="sale">For Rent</div>
            @endif
          </div>
        </div>
      </li>
     @endif
  @endif   
   </ul>
</div>

<a class="prev" onclick="plusSlides(-1)"><span class="p" >❮</span></a>
<a class="next" onclick="plusSlides(1)"><span class="n" >❯</span></a>

</div>
<br>
<br>
<br>

@php
  $popular_child=App\Model\Popular_place::where('popular_place',1)->orderBy('id','DESC')->get();
@endphp
<!-- popular start -->
<section class="popular_wrap wow fadeInUp" style="margin-top: -70px;">
  <div class="">
    <h1>POPULAR PLACES</h1>
    <span></span>
    <div class="row">
      @foreach($popular_child as $row)
      <div class="col-md-4 ">
          <div class="popular_img position-relative mt mt_md"> <img alt="" src="{{asset($row->image)}}">
          <div class="popular_img_text"><a href="{{ route('popular.property',$row->slug) }}">{{ $row->name }}</a></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@php
  $testimonial1=App\Model\Testimonial::orderBy('id','DESC')->first();
  $testimonial2=App\Model\Testimonial::orderBy('id','DESC')->skip(1)->first();
  $testimonial3=App\Model\Testimonial::orderBy('id','DESC')->skip(2)->first();
  $testimonial4=App\Model\Testimonial::orderBy('id','DESC')->skip(3)->first();
  $testimonial5=App\Model\Testimonial::orderBy('id','DESC')->skip(4)->first();
  $testimonial6=App\Model\Testimonial::orderBy('id','DESC')->skip(5)->first();
@endphp
<section class="popular_wrap wow fadeInUp">
<div class="title">
  <h1>Tastimonial</h1>
</div>
<div class="innercontent" style="background-image: url('././public/frontend/images/banner2.jpg');">
<div class="">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="testimonialswrp">
          <ul class="row">
            <li class="col-lg-6 col-md-6">
              <div class="testService wow fadeInUp">
                <div class="testi-info">
                  <div class="client-image"><img src="{{ asset($testimonial1->image) }}" alt=""></div>
                  <div class="name">{{ $testimonial1->name }} </div>
                  <p>{!! $testimonial1->details !!}</p>
                </div>
              </div>
            </li>
            <li class="col-lg-6 col-md-6">
              <div class="testService wow fadeInUp">
                <div class="testi-info">
                  <div class="client-image"><img src="{{ asset($testimonial2->image) }}" alt=""></div>
                  <div class="name">{{ $testimonial2->name }} </div>
                  <p>{!! $testimonial2->details !!}</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      @if($testimonial3 == null)
      @else
        <div class="carousel-item">
          <div class="testimonialswrp">
            <ul class="row">
              <li class="col-lg-6 col-md-6">
                <div class="testService fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset($testimonial3->image) }}" alt=""></div>
                    <div class="name">{{ $testimonial3->name }} </div>
                    <p>{!! $testimonial3->details !!}</p>
                  </div>
                </div>
              </li>
              @if($testimonial4 == null)
              @else
                <li class="col-lg-6 col-md-6">
                  <div class="testService fadeInUp">
                    <div class="testi-info">
                      <div class="client-image"><img src="{{ asset($testimonial4->image) }}" alt=""></div>
                      <div class="name">{{ $testimonial4->name }} </div>
                      <p>{!! $testimonial4->details !!}</p>
                    </div>
                  </div>
                </li>
              @endif
            </ul>
          </div>
        </div>
      @endif
      @if($testimonial5 == null)
      @else
        <div class="carousel-item">
          <div class="testimonialswrp">
            <ul class="row">
              <li class="col-lg-6 col-md-6">
                <div class="testService fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset($testimonial5->image) }}" alt=""></div>
                    <div class="name">{{ $testimonial5->name }} </div>
                    <p>{!! $testimonial5->details !!}</p>
                  </div>
                </div>
              </li>
              @if($testimonial6 == null)
              @else
                <li class="col-lg-6 col-md-6">
                  <div class="testService fadeInUp">
                    <div class="testi-info">
                      <div class="client-image"><img src="{{ asset($testimonial6->image) }}" alt=""></div>
                      <div class="name">{{ $testimonial6->name }} </div>
                      <p>{!! $testimonial6->details !!}</p>
                    </div>
                  </div>
                </li>
              @endif
            </ul>
          </div>
        </div>
      @endif
    </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
  </div>
</div>
</section>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>



@endsection

 --}}

 @extends('welcome')
  @section('content')

  @php
    $slider=App\Model\Slider::limit(5)->get();
  @endphp

  <div class="tp-banner-container">
    <div class="tp-banner">
      <ul>
        @foreach($slider as $row)
        <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" alt="" src="{{ asset($row->image) }}" data-lazyload="{{ asset($row->image) }}">
          <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="150" data-speed="600" data-start="2200"><span>{{ $row->title }}</div>
          <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2800">{{ $row->description }}</div>
          <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="340" data-speed="600" data-start="3500"><a href="{{ route('contact') }}">Contact Us </a></div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- Revolution slider end -->  
  @php
    $category=App\Model\Category::all();
    $type=App\Model\Subcategory::all();
    $location=App\Model\Popular_place::all();
    $size=App\Model\Size::all();
  @endphp
  <!--Form Start-->
  <div class="form_sec slider-wrap  wow fadeInUp">
    <div class="container">
      <div class="form-wrap">
        <form action="{{ route('search_property') }}" method="get" >
          <div class="row" >
            <div class="col-lg-5">
              <div class="input-group origin">
                <input type="text" name="title" class="form-control" placeholder="Enter Property Title, Location, Category ..." >
              </div>
            </div>
            <div class="input-group col-lg-4">
              <select class="nice-select form-control wide select_option" name="location_id">
                <option data-display="Location"></option>
                @foreach($location as $row)
                <option value="{{ $row->id }}" >{{ $row->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group col-lg-3">
              <select class="nice-select form-control wide select_option" name="size_id">
                <option data-display="By Size (Sqft)"></option>
                @foreach($size as $row)
                <option value="{{ $row->id }}" >{{ $row->size }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group col-lg-3 end_date">
              <select class="nice-select form-control wide select_option" name="category_id">
                <option data-display="Property Category"></option>
                @foreach($category as $row)
                <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group col-lg-3 economy">
              <select class="nice-select form-control wide select_option" name="type_id" >
                <option data-display="Property Type"></option>
                @foreach($type as $row)
                <option value="{{ $row->id }}">{{ $row->subcategory_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group col-lg-4 economy">
              <select class="nice-select form-control wide select_option" name="business_type">
                <option data-display="Property Status"></option>
                <option value="1">For Sale</option>
                <option value="0">For Rent</option>
              </select>
            </div>
            <div class="input-group col-lg-2">
              <button type="submit" class="submit" value="Search" ><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            </div>
          </div>
        </form>
      </div>
     </div>
  </div>
  <!--Form End-->
  @php
    $property_sale=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('type_id',2)->where('front_page',1)->where('properties.status',1)->where('business_type', 1)->orderBy('id','DESC')->limit(6)->get();
    @endphp
  <!--Properties Start-->
  <div class="property-wrap wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Featured Properties <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></h1>
      </div>
      
      <!--Row Start-->
      <ul class="row">
        <!--col-lg-4 Start-->
        @foreach($property_sale as $row)
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset($row->image) }}"></div>
            <h3><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $row->name }}</div>
            <div class="propert_info">
            <div class="rent_info">
              <div class="apart">{{ $row->category_name }}</div>
              <div class="sale">For Sale</div>
            </div>
          </div>
        </li>
        @endforeach
        <!--col-lg-4 End--> 
      </ul>
      <!--Row End--> 
      
    </div>
  </div>
  <!--Properties End--> 

  <!--Buy and Sell Start-->
  <div class="buy-wrap wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Buy or sell your house</h1>
      </div>
      <p>Donec placerat dolor id neque pretium placerat. Donec in facilisis risus. In sollicitudin magna luctus sem ultrices convallis. Sed quis ex vel tellus ullamcorper malesuada. Aenean facilisis ex dolor, id vehicula nisl consectetur dapibus. Phasellus mollis mauris semper placerat convallis. Morbi varius facilisis dignissim. Donec eu sollicitudin nunc. Aliquam in nisi id arcu gravida vehicula quis nec sapien. Fusce at dolor ex.</p>
      <div class="start_btn"> <span><a href="#search">Start Search Now</a></span> <span><a href="{{ route('browse') }}">Browse Properties</a></span> </div>
    </div>
  </div>
  <!--Buy and Sell Start--> 

  @php
    $popular=App\Model\Popular_place::where('popular_place',1)->orderBy('id','DESC')->limit(16)->get();
  @endphp
  <!-- popular start -->
  <section class="popular_wrap wow fadeInUp">
    <div class="container">
      <h1>POPULAR PLACES</h1>
      <span></span>
      <div class="row">
        @foreach($popular as $row)
        <div class="col-md-3 ">
            <div class="popular_img position-relative mt mt_md"> <img alt="" src="{{asset($row->image)}}">
            <div class="popular_img_text"><a href="{{ route('popular.property',$row->slug) }}">{{ $row->name }}</a></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- popular end --> 
  @php
    $property_rent=App\Model\Property::join('categories','properties.category_id','categories.id')->join('popular_places','properties.location_id','popular_places.id')->select('properties.*','categories.category_name','popular_places.name')->where('front_page',1)->where('properties.status',1)->where('business_type', 0)->orderBy('id','DESC')->limit(6)->get();
    @endphp
  <!--Properties rent Start-->
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Properties For Rent <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></h1>
      </div>
      
      <!--Row Start-->
      <ul class="row">
        <!--col-lg-4 Start-->
        @foreach($property_rent as $row)
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset($row->image) }}"></div>
            <h3><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $row->name }}</div>
            <div class="propert_info">
            <div class="rent_info">
              <div class="apart">{{ $row->category_name }}</div>
              <div class="sale">For Rent</div>
            </div>
          </div>
        </li>
        @endforeach
        <!--col-lg-4 End--> 
      </ul>
      <!--Row End--> 
      
    </div>
  </div>
  <!--Properties End--> 

  <!-- perfect home start -->
  <section class="perfect_home_wrap wow fadeInUp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="perfect_text">
            <h1>Want to find your perfect home?</h1>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultricies, ex eu cursus viverra, lorem turpis feugiat augue, non viverra ipsum nunc in magna.</span> </div>
        </div>
        <div class="col-lg-4">
          <div class="readmore"><a href="{{ route('browse') }}">Browse Properties</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- perfect home end --> 
  @php
    $team=App\Model\Team::limit(6)->get();
  @endphp
  <!-- our team start -->
  <section class="our_team_wrap wow fadeInUp">
    <div class="container">
      <h1>Meet Our Agents</h1>
      <span>Lorem ipsum dolor sit amet consectetur</span>
      <div class="row">
        @foreach($team as $row)
        <div class="col-lg-4 col-md-6">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset($row->image) }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="{{ $row->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="{{ $row->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="{{ $row->linkedin }}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>{{ $row->name }} <br>||-{{ $row->designation }}-||</h3>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- our team  end -->

  @php
    $testimonial1=App\Model\Testimonial::orderBy('id','DESC')->first();
    $testimonial2=App\Model\Testimonial::orderBy('id','DESC')->skip(1)->first();
    $testimonial3=App\Model\Testimonial::orderBy('id','DESC')->skip(2)->first();
    $testimonial4=App\Model\Testimonial::orderBy('id','DESC')->skip(3)->first();
    $testimonial5=App\Model\Testimonial::orderBy('id','DESC')->skip(4)->first();
    $testimonial6=App\Model\Testimonial::orderBy('id','DESC')->skip(5)->first();
  @endphp
  <section class=" our_team_wrap wow fadeInUp">
  <div class="title">
    <h1>Tastimonial</h1>
    <span>Lorem ipsum dolor sit amet consectetur</span>
  </div>
  <div class="innercontent" style="background-image: url('././public/frontend/images/banner2.jpg');">
  <div class="">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testimonialswrp">
            <ul class="row">
              <li class="col-lg-6 col-md-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset($testimonial1->image) }}" alt=""></div>
                    <div class="name">{{ $testimonial1->name }} </div>
                    <p>{!! $testimonial1->details !!}</p>
                  </div>
                </div>
              </li>
              <li class="col-lg-6 col-md-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset($testimonial2->image) }}" alt=""></div>
                    <div class="name">{{ $testimonial2->name }} </div>
                    <p>{!! $testimonial2->details !!}</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        @if($testimonial3 == null)
        @else
          <div class="carousel-item">
            <div class="testimonialswrp">
              <ul class="row">
                <li class="col-lg-6 col-md-6">
                  <div class="testService fadeInUp">
                    <div class="testi-info">
                      <div class="client-image"><img src="{{ asset($testimonial3->image) }}" alt=""></div>
                      <div class="name">{{ $testimonial3->name }} </div>
                      <p>{!! $testimonial3->details !!}</p>
                    </div>
                  </div>
                </li>
                @if($testimonial4 == null)
                @else
                  <li class="col-lg-6 col-md-6">
                    <div class="testService fadeInUp">
                      <div class="testi-info">
                        <div class="client-image"><img src="{{ asset($testimonial4->image) }}" alt=""></div>
                        <div class="name">{{ $testimonial4->name }} </div>
                        <p>{!! $testimonial4->details !!}</p>
                      </div>
                    </div>
                  </li>
                @endif
              </ul>
            </div>
          </div>
        @endif
        @if($testimonial5 == null)
        @else
          <div class="carousel-item">
            <div class="testimonialswrp">
              <ul class="row">
                <li class="col-lg-6 col-md-6">
                  <div class="testService fadeInUp">
                    <div class="testi-info">
                      <div class="client-image"><img src="{{ asset($testimonial5->image) }}" alt=""></div>
                      <div class="name">{{ $testimonial5->name }} </div>
                      <p>{!! $testimonial5->details !!}</p>
                    </div>
                  </div>
                </li>
                @if($testimonial6 == null)
                @else
                  <li class="col-lg-6 col-md-6">
                    <div class="testService fadeInUp">
                      <div class="testi-info">
                        <div class="client-image"><img src="{{ asset($testimonial6->image) }}" alt=""></div>
                        <div class="name">{{ $testimonial6->name }} </div>
                        <p>{!! $testimonial6->details !!}</p>
                      </div>
                    </div>
                  </li>
                @endif
              </ul>
            </div>
          </div>
        @endif
      </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
      </div>
    </div>
  </div>
</section>


  @endsection