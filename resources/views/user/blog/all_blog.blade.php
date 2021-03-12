@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>News & Events</h1>
  </div>
</div>
<!--Inner Heading End--> 
@php
$blog=DB::table('blogs')
    ->join('blog_categories','blogs.category_id','blog_categories.id')
    ->select('blogs.*','blog_categories.category_name')
    ->orderBy('id','DESC')
    ->paginate(6);
@endphp
        <div class="single-widgets widget_search fadeInRight wow">
          <h4>Search</h4>
          <form action="{{ route('search.blog') }}" method="post" class="sidebar-search-form">
            @csrf
            <input type="search" required="" name="search" placeholder="Search..">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="container">
        <div class="row" >
          <div class="col-lg-8 col-md-12" >
            <ul class="row blog_post">
            	@foreach($blog as $row)
              <li class="col-lg-6 col-md-6">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"> <a href="{{ URL::to('single-blog-'.$row->title_slug) }}"><img alt=""  src="{{ asset($row->image) }}" style="height: 200px;"></a></div>
                  <h3><a href="{{ URL::to('single-blog-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
                  <div class="post-meta"> <span>{{ $row->date }}</span> <span><b>Category:</b> {{ $row->category_name }}</span></div>
                  <p>{!! Str::limit($row->details, 80) !!}</p>
                </div>
              </li>
              @endforeach
            </ul>
            <div class="float-right text-center">{{ $blog->links() }}</div>
          </div>
            <div class="col-lg-4">
              {{-- <div class="single-widgets widget_search fadeInRight wow">
                <h4>Search</h4>
                <form action="{{ route('search.blog') }}" method="post" class="sidebar-search-form">
                  @csrf
                  <input type="search" name="search" placeholder="Search..">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>
              </div> --}}
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
          </div>
        </div>
@endsection