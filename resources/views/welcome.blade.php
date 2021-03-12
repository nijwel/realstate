<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
@php
  $seo=App\Model\Seo::first();
@endphp
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="meta_author" content="{{ $seo->meta_author }}">
        <meta name="meta_description" content="{{ $seo->meta_description }}">
        <meta name="meta_keyword" content="{{ $seo->meta_keyword }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
        <meta name="google_verification" content="{{ $seo->google_verification }}">
        <meta name="being_verification" content="{{ $seo->being_verification }}">
        <meta name="google_analytic" content="{{ $seo->google_analytic }}">
        <meta name="alexa_analytic" content="{{ $seo->alexa_analytic }}">
        <title>{{ $seo->meta_title }}</title>

<link rel="shortcut icon" href="{{ asset($seo->meta_icon) }}" type="image/x-icon" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/css/all.css')}}" rel="stylesheet">
<!-- Owl Carousel CSS -->
<link href="{{asset('public/frontend/css/owl.carousel.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/rs-plugin/css/settings.css')}}">
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/story.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/slider.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/project.css')}}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400&family=Roboto:wght@300&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<title>Real Estate</title>

</head>
<body>
<!--Topbar Start-->
@php
  $social=App\Model\Social::all();
  $contact_info=App\Model\ContactInfo::first();
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
          <div class="topbar_login"><a href="{{ route('proposal') }}"> Submit Proposal</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Topbar End--> 
@php
  $logo=App\Model\Logo::first();
@endphp
<!--Header Start-->
<div class="header-wrap wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
        <div class="header_logo"><a href="{{ url('/') }}"><img alt="" src="{{ asset($logo->top_logo) }}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}"> Home <span class="caret"><i class="fas fa-caret"></i></span></a> <i class="fas fa-caret-down"></i>
              </li>  
              <li class="nav-item"><a class="nav-link" href="#"> About US <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                <ul class="submenu">
                  <li><a href="{{ route('story') }}">Our Story</a></li>
                  <li><a href="{{ route('mission.vission') }}">Vission & Mission</a></li>
                  <li><a href="{{ route('director') }}">Board Of Directors</a></li>
                  <li><a href="{{ route('team') }}">Management Team</a></li>
                  <li><a href="{{ route('clint') }}">Our Clients</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#."> Project <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                <ul class="submenu">
                  <li><a href="{{ route('ongoing') }}">Ongoing</a></li>
                  <li><a href="{{ route('upcoming') }}">Upcoming</a></li>
                  <li><a href="{{ route('complete') }}">Complete</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('all_front.blog') }}"> News & Events</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('all_other.service') }}"> Other Service</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 

@yield('content') 

@php
  $story=App\Model\Story::first();
@endphp
<!--Footer Start-->
<footer class="footer bg-style wow fadeInUp">
  <div class="container">
    <div class="footer-upper">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget about-widget"> <a href="{{ url('/') }}"> <img alt="" src="{{ asset($logo->footer_logo) }}"> </a>
            <p>{!! Str::limit($story->details_4, 100) !!}</p>
            <div class="readmore"><a href="{{ route('story',['#fourth']) }}">Read More </a></div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="footer-widget quick-links">
            <h3 class="title">Quick links</h3>
            <ul>
              <li><a href="{{ url('/') }}"> Home</a> </li>
              <li><a href="{{ route('upcoming') }}"> Upcoming Project</a> </li>
              <li><a href="{{ route('complete') }}"> Complete Project</a> </li>
              <li><a href="{{ route('all_front.blog') }}"> News & Events</a> </li>
              <li><a href="{{ route('contact') }}"> Contact Us</a> </li>
            </ul>
          </div>
        </div>
        @php
          $page=App\Model\FbPage::first();
        @endphp
        <div class="col-lg-4 col-md-6">
          <div class="footer-widget contact">
            <h3 class="title">Facebook Page</h3>
            <div class="fb-page" data-href="{{ $page->link }}" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="{{ $page->link }}" class="fb-xfbml-parse-ignore"><a href="{{ $page->link }}">{{ $page->name }}</a></blockquote></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget contact">
            <h3 class="title">Contact Info</h3>
            <ul class="footer-adress">
              <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>{{ $contact_info->address }}</span> </li>
              <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:{{ $contact_info->email }}"> {{ $contact_info->email }}</a></span> </li>
              <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:{{ $contact_info->mobile }}"> {{ $contact_info->mobile }}</a></span> </li>
            </ul>
            <div class="social-icons footer_icon">
              @foreach($social as $row)
              <ul>
                <li><a href="{{ $row->facebook }}" target="blank" ><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="{{ $row->twitter }}" target="blank" ><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{ $row->linkedin }}" target="blank" ><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="{{ $row->youtube }}" target="blank" ><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              </ul>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @php
      $copyright=DB::table('copyrights')->first();
  @endphp
  <div class="text-white float-right">
    <span style="font-size: 10px;" >Copyright &copy; {{ $copyright->copyright }} All Rights Reserved.</span>
  </div>
</footer>
<!--Footer End--> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script> 
<script src="{{ asset('public/frontend/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('public/frontend/js/popper.min.js') }}"></script> 
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ ('public/frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ ('public/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<!-- Owl Carousel --> 
<script src="{{ asset('public/frontend/js/owl.carousel.js') }}"></script> 
<!-- wow js --> 
<script src="{{ asset('public/frontend/js/animate.js') }}"></script> 
<script src="{{ asset('public/frontend/js/jquery.nice-select.js') }}"></script>
<script>
  new WOW().init();
</script> 

<!-- general script file --> 
<script src="{{ asset('public/frontend/js/wow.js') }}"></script> 
<script src="{{ asset('public/frontend/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=1202329563516849&autoLogAppEvents=1" nonce="Lgg8uthy"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
             toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
            }
    @endif
</script>
<!--Start of Tawk.to Script-->
@php
  $twak_to=App\Model\TwakTo::first();
@endphp
{!! $twak_to->twak_to !!}
<!--End of Tawk.to Script-->
</body>

</html>