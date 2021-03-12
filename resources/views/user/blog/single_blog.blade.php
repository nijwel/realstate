@extends('welcome')
@section('meta')
	<meta property='og:url' content="{{ Request::fullurl() }}">
	<meta property='og:type' content="website">
	<meta property='og:title' content="{{ $blog->title }}">
	<meta property='og:description' content="{{ $blog->details }}">
	<meta property='og:image' content="{{ URL::to($blog->image) }}">
@endsection
@section('content')
<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="row blog_details">
      <div class="col-lg-8">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="{{ asset($blog->image) }}"></div>
          <h3>{{ $blog->title }}</h3>
          <div class="post-meta"> 
            <span>{{ $blog->date }}</span> <span>Category: {{ $blog->category_name }}</span> 
          </div>
          	<div>{!! $blog->details !!}</div>
        </div>
        <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>
      </div>
      <div class="col-lg-4">
        <div class="single-widgets widget_search fadeInRight wow">
          <h4>Search</h4>
          <form action="{{ route('search.blog') }}" method="post" class="sidebar-search-form">
            @csrf
            <input type="search" required="" name="search" placeholder="Search..">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="single-widgets widget_category fadeInRight wow">
          <h4>Categories</h4>
          <ul>
          	@foreach($blogcategory as $row)
            @php
              $total_post=App\Model\Blog::where('category_id',$row->id)->get();
            @endphp
            <li><a href="{{ URL::to('category-wise-blog-'.$row->category_slug) }}"> {{ $row->category_name }}<span>{{ count($total_post) }}</span></a></li>
            @endforeach
          </ul>
        </div>
        @php
          $recent_property=App\Model\Property::limit(2)->orderBy('id','DESC')->get();
        @endphp
          <div class="single-widgets widget_category fadeInRight wow">
            <h4>Recents Property</h4>
            <ul class="property_sec">
              @foreach($recent_property as $row)
              <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img src="{{ asset($row->image) }}" style="width: 100px; height: 80px;"></div>
                  <div class="property_info">
                    <h4><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->address }}</a></h4>
                    
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
    </div>
  </div>
</div>
<!--Inner Content End--> 

{{-- Share link --}}
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f9948f910a7bb00122f5749&product=image-share-buttons' async='async'></script>

{{-- comment link --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=251302696084561&autoLogAppEvents=1" nonce="cribU2wE"></script>
</section>
@endsection