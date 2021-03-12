@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Meet Our Team</h1>
  </div>
</div>
<!--Inner Heading End--> 
@php
  $team=App\Model\Team::paginate(6);
@endphp
<!-- our team start -->
<section class="our_team_wrap innerTeamWrp">
  <div class="container">
    <div class="row">
      @foreach($team as $row)
      <div class="col-lg-4 col-md-6">
        <div class="team_wrp">
          <div class="team_member wow fadeInUp">
            <div class="team_img"><img alt="" src="{{ asset($row->image) }}"></div>
            <div class="team_icons">
              <ul>
                <li><a href="{{ $row->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="{{ $row->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{ $row->linkedin }}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="team_name">
              <h3>{{ $row->name }} <br>||-{{ $row->designation }}-||</h3>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="float-right text-center wow fadeInUp">{{ $team->links() }}
  </div>
</section>
<!-- our team  end --> 
@endsection
