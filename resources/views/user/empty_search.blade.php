@extends('welcome')
@section('content')
<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Result Not Found</h1>
  </div>
</div>
<!--Inner Heading End--> 

<!--Inner Content Start-->
<div class="innercontent">
  <div class="container"> 
    
    <!--404 Start-->
    <div class="404-wrap wow fadeInUp">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="four-zero-page">
            <h2>404</h2>
            <h3>Sorry This Search Result Not Found</h3>
            <div class="readmore"> <a href="{{ url()->previous() }}">Go Back</a> </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--404 End--> 
    
  </div>
</div>

<!--Inner Content End--> 
@endsection