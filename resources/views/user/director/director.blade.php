@extends('welcome')
@section('content')
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Boards Of Director</h1>
  </div>
</div>
<!--Inner Heading End--> 
 @php
  $director=App\Model\Director::all();
 @endphp     
      <!--Row Start-->
      <ul class="row agentWrp">
        <!--col-lg-4 Start-->
        @foreach($director as $row)
        <li class="col-lg-4 col-md-6">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset($row->image) }}"></div>
            <h3><a href="{{ URL::to('director-comment-'.$row->id.'-'.$row->name_slug) }}">{{ $row->name }}</a> <span><i class="fas fa-map-marker-alt"></i> {{ $row->address }}</span></h3>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">
                  <div class="agent_box" style="margin-left: 220%;">
                    <a class="btn btn-warning" href="{{ URL::to('director-comment-'.$row->id.'-'.$row->name_slug) }}" > <i class="far fa-comment"></i> <i>Comments </i></a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        @endforeach
        <!--col-lg-4 End--> 
      </ul>
      <br>
      <!--Row End-->
    </div>
    </div>
  </div>
</div>

<!--Inner Content End--> 
@endsection