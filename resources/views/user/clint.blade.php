@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Our Clints</h1>
  </div>
</div>
<!--Inner Heading End-->
@php
  $clint=App\Model\Clint::paginate(9);
@endphp
<!--Properties Start-->
<div class="property-wrap wow fadeInUp">
  <div class="container">
    <!--Row Start-->
    <ul class="row">
      @foreach($clint as $row)
      <!--col-lg-4 Start-->
      <li class="col-lg-4 col-md-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><a href="{{ $row->link }}" target="blank" ><img alt="" src="{{ asset($row->image) }}"></a></div>
          <h3 class="text-center" ><a href="{{ $row->link }}" target="blank">{{ $row->name }}</a></h3>
        </div>
      </li>
      @endforeach
      <!--col-lg-4 End-->  
    </ul>
    <!--Row End--> 
    <div class="float-right text-center wow fadeInUp">{{ $clint->links() }}</div>
    
  </div>
</div>
<!--Properties End--> 

@endsection