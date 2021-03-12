@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Details & Comment</h1>
  </div>
</div>
<!--Inner Heading End--> 
<!--Inner Content Start-->
<div class="innercontent">
  <div class="">
    <div class="row listing_wrap agent_detailss">
      <div class="col-lg-12"> 
        
        <div class="row">
        	<div class="col-sm-6">
        		<!--Row Start-->
        <ul class="agentWrp">
          <!--col-lg-4 Start-->
          <li>
            <div class="property_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-6">
                  <div class="propertyImg"><img alt="" src="{{ asset($director->image) }}"></div>
                </div>
                <div class="col-lg-6">
                  <h3><a href="#">{{ $director->name }}</a> <span>{{ $director->designation }}</span></h3>
                  <div class="social-icons agent_icons">
                    <ul>
                      <li><a href="{{ $director->facebook }}" target="blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                      <li><a href="{{ $director->twitter }}" target="blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="{{ $director->linkedin }}" target="blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End-->
        </ul>
        <!--Row End-->
        	</div>
        <div class="col-sm-6">
        	<div class="property_box wow fadeInUp">
        	  <div class="propert_info">
                <ul class="row">
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <div class="proprty_icon"><i class="fas fa-phone-alt"></i></div>
                      <h5>Phone</h5>
                      </a> </div>
                  </li>
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <div class="proprty_icon"><i class="far fa-envelope"></i></div>
                      <h5>Email</h5>
                      </a> </div>
                  </li>
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <div class="proprty_icon"><i class="fas fa-map-marker-alt"></i></div>
                      <h5>Address</h5>
                      </a> </div>
                  </li>
                </ul>
                <ul class="row">
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <h5>{{ $director->phone }}</h5>
                      </a> </div>
                  </li>
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <h5>{{ $director->email }}</h5>
                      </a> </div>
                  </li>
                  <li class="col-4">
                    <div class="agent_box"><a href="#">
                      <h5>{{ $director->address }}</h5>
                      </a> </div>
                  </li>
                </ul>
              </div>
        	</div>
        </div> 
        <div class="container" >
          <h3 class="desc_head">Messege</h3>
          {!! $director->details !!}
        </div> 
      </div>
    </div>
  </div>
</div>
</div>


@endsection