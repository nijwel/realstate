<!DOCTYPE html>
<html lang="en">
<head>
@php
  $seo=App\Model\Seo::first();
@endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="meta_description" content="{{ $seo->meta_description }}">
    <meta name="meta_author" content="{{ $seo->meta_author }}">
    <link rel="icon" href="{{ asset($seo->meta_icon) }}">
    <title>{{ $seo->meta_title }}</title>
    
    <!-- Bootstrap v4.1.3.stable -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap-extend.css') }}">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/font-awesome/css/font-awesome.css') }}">
    
    <!-- ionicons -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/Ionicons/css/ionicons.css') }}">
    <!-- Toaster-->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/backend/assets/vendor_components/toastr/toastr.css') }}">
    
    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/master_style.css') }}">
    
    <!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/skins/_all-skins.css') }}">
    
    <!-- weather weather -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/weather-icons/weather-icons.css') }}">
    
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/jvectormap/jquery-jvectormap.css') }}">
        
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') }}">
    <!-- daterange picker -->
  
  <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css') }}">

  <!-- bootstrap datepicker --> 
  <link rel="stylesheet" href="{{ asset('public/backend/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/public/backend/assets/vendor_components/sweetalert/sweetalert.css') }}">
  
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

     
  </head>

<body class="hold-transition skin-blue sidebar-mini">
  @guest
  @else
<div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ route('admin.dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{ Auth::user()->designation }}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ Auth::user()->designation }}</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
  @php
    $unread=App\Model\Messege::where('status',0)->orderBy('id','DESC')->get();
  @endphp
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">       
            <!-- Messages-->
            @if(Auth::user()->messege == 1)
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <span class="label label-success">{{ count($unread) }}</span>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">You have {{ count($unread) }} messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content-div">
                    @foreach($unread as $row)
                    <li><!-- start message -->
                      <a href="{{ route('show.messege',$row->id) }}">
                        <div class="mail-contnet">
                           <h4>
                            {{ $row->name }}
                            <small><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($row->created_at)->diffForhumans() }}</small>
                           </h4>
                           <span>{{ $row->messege }}</span>
                        </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li class="footer"><a href="{{ route('unread.messege') }}">See all Messege</a></li>
              </ul>
            </li>
            @else
            @endif
            <!-- Notifications -->
            @php
              $proposal=App\Model\Proposal::where('status',0)->orderBy('id','DESC')->get();
            @endphp
            @if(Auth::user()->c_proposal == 1)
            <li class="dropdown notifications-menu">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="label label-warning">{{ count($proposal) }}</span>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">You have {{ count($proposal) }} Pending Proposal</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content">
                    @foreach($proposal as $row)
                    <li>
                      <a href="{{ route('view.proposal',$row->id) }}">
                        <i class="fa fa-users text-aqua"></i> {{ Str::limit($row->title, 15) }}
                        <small><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($row->created_at)->diffForhumans() }}</small>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li class="footer"><a href="{{ route('pending') }}">View all</a></li>
              </ul>
            </li>
            @else
            @endif
            <!-- User Account -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset(Auth::user()->image) }}" class="user-image rounded-circle" alt="User Image">
              </a>
              <ul class="dropdown-menu scale-up">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset(Auth::user()->image) }}" class="rounded float-left" alt="User Image">
                  
                  <p>
                    {{ Auth::user()->name }}
                    <small>Member since, {{ Auth::user()->created_at->format('M Y') }}</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{ route('admin.profile') }}" class="btn btn-block btn-primary">Profile</a>
                  </div>
                  <div class="pull-right">
                      <a class="btn btn-block btn-danger" href="{{ route('admin.logout') }}">
                          {{ __('Sign out') }}
                      </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <!-- Control Sidebar Toggle Button -->
    <div>
    <button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
  </div>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      {{-- <div class="user-panel">
        <div class="image float-left">
          <img src="{{ asset(Auth::user()->image) }}" style="width: 150px; height: auto;" class="rounded" alt="User Image">
        </div>
        <div class="info float-left">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> --}}
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">        
        <li class="treeview active">
          <li class="active"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </li>
        @if(Auth::user()->home == 1)

        <li class="treeview @yield('all.slider') @yield('all.testimonial') @yield('add.testimonial')">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('all.slider')"><a href="{{ route('all.slider') }}"><i class="fa fa-circle-o"></i> Slider</a></li>
            <li class="@yield('add.testimonial')"><a href="{{ route('add.testimonial') }}"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
            <li class="@yield('all.testimonial')"><a href="{{ route('all.testimonial') }}"><i class="fa fa-circle-o"></i>All Testimonial</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->c_proposal == 1)

        <li class="treeview @yield('pending') @yield('success') @yield('reject') @yield('outmail')">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Clints Proposal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('pending')"><a href="{{ route('pending') }}"><i class="fa fa-circle-o"></i> Panding Proposal</a></li>
            <li class="@yield('success')"><a href="{{ route('success') }}"><i class="fa fa-circle-o"></i> Success Proposal</a></li>
            <li class="@yield('reject')" ><a href="{{ route('reject') }}"><i class="fa fa-circle-o"></i> Reject Proposal</a></li>
            <li class="@yield('outmail')"><a href="{{ route('outmail') }}"><i class="fa fa-circle-o"></i> Out Mail Box</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->p_setting == 1)

        <li class="treeview @yield('all.category') @yield('all.subcategory') @yield('all.size') @yield('all.popular_place') ">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Property Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('all.popular_place')"><a href="{{ route('all.popular_place') }}"><i class="fa fa-circle-o"></i> Places</a></li>
            <li class="@yield('all.category')"><a href="{{ route('all.category') }}"><i class="fa fa-circle-o"></i> Property Category</a></li>
            <li class="@yield('all.subcategory')"><a href="{{ route('all.subcategory') }}"><i class="fa fa-circle-o"></i> Property Type</a></li>
            <li class="@yield('all.size')"><a href="{{ route('all.size') }}"><i class="fa fa-circle-o"></i> Size (Sqft)</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->property == 1)

        <li class="treeview @yield('all.property') @yield('add.property')">
          <a href="#">
            <i class="fa fa-building-o"></i>
            <span>Property</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('add.property')"><a href="{{ route('add.property') }}"><i class="fa fa-circle-o"></i> Add Property</a></li>
            <li class="@yield('all.property')"><a href="{{ route('all.property') }}"><i class="fa fa-circle-o"></i> All Property</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->about_us == 1)

        <li class="treeview @yield('edit.story') @yield('edit.mission_vission') @yield('all.director') @yield('all.team') @yield('all.clint')">
          <a href="#">
            <i class="fa  fa-info-circle"></i>
            <span>About US</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('edit.story')"><a href="{{ route('edit.story') }}"><i class="fa fa-circle-o"></i> Our Story</a></li>
            <li class="@yield('edit.mission_vission')"><a href="{{ route('edit.mission_vission') }}"><i class="fa fa-circle-o"></i> Vission & Mission</a></li>
            <li class="@yield('all.director')"><a href="{{ route('all.director') }}"><i class="fa fa-circle-o"></i> Board Of Directors</a></li>
            <li class="@yield('all.team')"><a href="{{ route('all.team') }}"><i class="fa fa-circle-o"></i> Management Team</a></li>
            <li class="@yield('all.clint')"><a href="{{ route('all.clint') }}"><i class="fa fa-circle-o"></i> Our Client</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->blog == 1)

        <li class="treeview @yield('all.blog') @yield('add.blog') @yield('all.blog_category')">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('all.blog_category')"><a href="{{ route('all.blog_category') }}"><i class="fa fa-circle-o"></i> Blog Category</a></li>
            <li class="@yield('add.blog')"><a href="{{ route('add.blog') }}"><i class="fa fa-circle-o"></i> Add Blog</a></li>
            <li class="@yield('all.blog')"><a href="{{ route('all.blog') }}"><i class="fa fa-circle-o"></i> All Blog</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->service == 1)

        <li class="treeview @yield('all.service_type') @yield('add.service') @yield('all.service')">
          <a href="#">
            <i class="fa  fa-plus"></i>
            <span>Other Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('all.service_type')"><a href="{{ route('all.service_type') }}"><i class="fa fa-circle-o"></i> Service Type</a></li>
            <li class="@yield('add.service')"><a href="{{ route('add.service') }}"><i class="fa fa-circle-o"></i>Add Service</a></li>
            <li class="@yield('all.service')"><a href="{{ route('all.service') }}"><i class="fa fa-circle-o"></i>All Service</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->messege == 1)

        <li class="treeview @yield('read.messege') @yield('unread.messege')">
          <a href="#">
            <i class="fa  fa-envelope"></i>
            <span>Messeges</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('unread.messege')"><a href="{{ route('unread.messege') }}"><i class="fa fa-circle-o"></i> Unread Messege</a></li>
            <li class="@yield('read.messege')"><a href="{{ route('read.messege') }}"><i class="fa fa-circle-o"></i> Read Messege</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->setting == 1)

        <li class="treeview @yield('edit.logo') @yield('edit.contact_info') @yield('edit.social') @yield('edit.fb_page') @yield('edit.twak_to') @yield('edit.copyright')">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('edit.logo')"><a href="{{ route('edit.logo') }}"><i class="fa fa-circle-o"></i> Logo</a></li>
            <li class="@yield('edit.contact_info')"><a href="{{ route('edit.contact_info') }}"><i class="fa fa-circle-o"></i> Contact Info</a></li>
            <li class="@yield('edit.social')"><a href="{{ route('edit.social') }}"><i class="fa fa-circle-o"></i> Social</a></li>
            <li class="@yield('edit.fb_page')"><a href="{{ route('edit.fb_page') }}"><i class="fa fa-circle-o"></i> Facebook Page</a></li>
            <li class="@yield('edit.twak_to')"><a href="{{ route('edit.twak_to') }}"><i class="fa fa-circle-o"></i> Twak.to</a></li>
            <li class="@yield('edit.copyright')"><a href="{{ route('edit.copyright') }}"><i class="fa fa-circle-o"></i> Copy Right</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->seo == 1)

        <li class="treeview @yield('edit.seo')">
          <a href="#">
            <i class="fa  fa-mars"></i>
            <span>SEO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('edit.seo')"><a href="{{ route('edit.seo') }}"><i class="fa fa-circle-o"></i> Edit SEO</a></li>
          </ul>
        </li>
        @endif
        @if(Auth::user()->role_play == 1)

        <li class="treeview @yield('add.user') @yield('all.user') @yield('edit.user')">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Role Play</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('add.user')"><a href="{{ route('add.user') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li class="@yield('all.user')"><a href="{{ route('all.user') }}"><i class="fa fa-circle-o"></i> All User</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
 {{--    <div class="sidebar-footer">
    <!-- item-->
    <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
    <!-- item-->
    <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
    <!-- item-->
    <a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
  </div> --}}
  </aside>
  @endguest


    <main>
      @yield('admin_content')
    </main>

  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
    
</div>
    <!-- jQuery 3 -->
    <script src="{{ asset('public/backend/assets/vendor_components/jquery/dist/jquery-3.3.1.js') }}"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('public/backend/assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <!-- popper -->
    <script src="{{ asset('public/backend/assets/vendor_components/popper/dist/popper.min.js') }}"></script>
    
    <!-- Bootstrap v4.1.3.stable -->
    <script src="{{ asset('public/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script> 
    
    <!-- ChartJS -->
    <script src="{{ asset('public/backend/assets/vendor_components/chart-js/chart.js') }}"></script>
    
    <!-- Sparkline -->
    <script src="{{ asset('public/backend/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>
    
    <!-- jvectormap -->
    <script src="{{ asset('public/backend/assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> 
    <script src="{{ asset('public/backend/assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('public/backend/assets/vendor_components/jquery-knob/js/jquery.knob.js') }}"></script>
        
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('public/backend/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
    
    <!-- Slimscroll -->
    <script src="{{ asset('public/backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    
    <!-- FastClick -->
    <script src="{{ asset('public/backend/assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
    
    <!-- fox_admin App -->
    <script src="{{ asset('public/backend/js/template.js') }}"></script>
    
    <!-- fox_admin dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('public/backend/js/pages/dashboard.js') }}"></script>
    
    <!-- fox_admin for demo purposes -->
    <script src="{{ asset('public/backend/js/demo.js') }}"></script>

    <!-- bootstrap datepicker -->
  <script src="{{ asset('public/backend/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- date-range-picker -->
  <script src="{{ asset('public/backend/assets/vendor_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('public/backend/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
    <!-- weather for demo purposes -->
    <script src="{{ asset('public/backend/assets/vendor_plugins/weather-icons/WeatherIcon.js') }}"></script>

    <!---Toster---->
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('/public/backend/assets/vendor_components/toastr/toastr.min.js') }}"></script>

    <!-- foxadmin for advanced form element -->
  <script src="{{asset ('public/backend/js/pages/advanced-form-element.js') }}"></script>

  <!-- This is data table -->
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js') }}"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js') }}"></script>
    <!-- end - This is for export functionality only -->
  
  <!-- foxadmin for Data Table -->
  <script src="{{ asset('public/backend/js/pages/data-table.js') }}"></script>
  <script src="{{ asset('public/backend/js/repeater.js') }}"></script>
    
    <script type="text/javascript">
    
        WeatherIcon.add('icon1' , WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
        WeatherIcon.add('icon2' , WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );
        WeatherIcon.add('icon3' , WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } );

    </script>
    {{-- <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script> --}}
    <script src="{{ asset('/public/backend/assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
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

  
</body>

</html>
