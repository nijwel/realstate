@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!--Inner Heading End--> 

<!--Inner Content Start-->
<div class="innercontent wow fadeInUp">
  <div class="container">
    <div class="getTouch">Get In Touch</div>
    <div class="row formcol">
      <div class="col-lg-8">
        @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <form class="form mb-md50" id="contact-form" method="post" action="{{ route('send.messege') }}" >
          @csrf
          <div class="messages"></div>
          <div class="controls">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group has-error has-danger">
                  <input id="form_name" class="form-control" type="text" name="name" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_email" class="form-control" required="" type="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_phone" class="form-control" required="" type="text" name="phone" placeholder="Phone">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_subject" class="form-control" type="text" name="subject" placeholder="Subject">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea id="form_message" class="form-control" required="" name="messege" placeholder="Messege" rows="4"></textarea>
                </div>
              </div>
              <div class="col-lg-12 contact-wrap">
                <div class="contact-btn">
                  <button type="submit" class="sub">Submit Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      @php
        $contact_info=App\Model\ContactInfo::first();
      @endphp
      <div class="col-lg-4">
        <div class="map">
          {!! $contact_info->map !!}
        </div>
      </div>
    </div>
  </div>
</div>
<!--Inner Content End--> 
@endsection