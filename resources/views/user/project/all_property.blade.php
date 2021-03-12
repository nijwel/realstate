@extends('welcome')
@section('content')
	<section>
		<!--Properties Start-->
		<div class="property-wrap wow fadeInUp">
		  <div class="">
		    <!--Row Start-->
		    <ul class="row">
		      <!--col-lg-4 Start-->
		      @foreach($browse as $row)
		      <li class="col-lg-4 col-sm-6">
		        <div class="property_box wow fadeInUp">
		          <div class="propertyImg"><img alt="" src="{{ asset($row->image) }}"></div>
		          <h3><a href="{{ URL::to('property-details-'.$row->title_slug) }}">{{ $row->title }}</a></h3>
		          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ $row->name }}</div>
		          <div class="propert_info">
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
		    
		  </div>
		  <div class="float-right text-center">{{ $browse->links() }}</div>
		</div>
		<!--Properties End--> 
	</section>



@endsection