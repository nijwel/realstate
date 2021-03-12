
<!--Topbar Start-->
@php
  $social=App\Model\Social::all();
@endphp
<div class="topbar-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-4">
        @foreach($social as $row)
        <ul class="social_media style_none">
          <li><a href="{{ $row->facebook }}" target="blank" ><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
          <li><a href="{{ $row->twitter }}" target="blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="{{ $row->linkedin }}" target="blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
          <li><a href="{{ $row->youtube }}" target="blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
        @endforeach
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="top_right">
          <div class="topbar_phone"><a href="#"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ $contact_info->mobile }}</a></div>
          <div class="topbar_login"><a href="submit_property.html"> Submit Property</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Topbar End-->