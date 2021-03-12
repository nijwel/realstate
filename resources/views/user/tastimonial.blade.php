@extends('welcome')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Testimonials</h1>
  </div>
</div>
<!--Inner Heading End-->

{{-- <div class="testimonialswrp">
      <div class="row">
        <li class="col-lg-6">
          <div class="testService wow fadeInUp">
            <div class="testi-info">
              <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
              <div class="name">Tegan Bolton </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
              <ul class="client_rating">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="col-lg-6">
          <div class="testService wow fadeInUp">
            <div class="testi-info">
              <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
              <div class="name">Bob Evanchak </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
              <ul class="client_rating">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
        </li>
      </div>
    </div> --}}

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testimonialswrp">
            <ul class="row">
              <li class="col-lg-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                    <div class="name">Tegan Bolton </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                    <ul class="client_rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="col-lg-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                    <div class="name">Bob Evanchak </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                    <ul class="client_rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonialswrp">
                <ul class="row">
                  <li class="col-lg-6">
                    <div class="testService wow fadeInUp">
                      <div class="testi-info">
                        <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                        <div class="name">Tegan Bolton </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                        <ul class="client_rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-6">
                    <div class="testService wow fadeInUp">
                      <div class="testi-info">
                        <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                        <div class="name">Bob Evanchak </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                        <ul class="client_rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
        </div>
        <div class="carousel-item">
          <div class="testimonialswrp">
            <ul class="row">
              <li class="col-lg-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                    <div class="name">Tegan Bolton </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                    <ul class="client_rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="col-lg-6">
                <div class="testService wow fadeInUp">
                  <div class="testi-info">
                    <div class="client-image"><img src="{{ asset('public/frontend/images/client.jpg') }}" alt=""></div>
                    <div class="name">Bob Evanchak </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.</p>
                    <ul class="client_rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

@endsection