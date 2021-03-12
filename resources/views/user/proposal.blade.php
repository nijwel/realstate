@extends('welcome')
@section('content')

<!--Inner Heading Start-->
<div class="innerHeading">
  <div class="container">
    <h1>Submit Proposal</h1>
  </div>
</div>
<!--Inner Heading End--> 

<!--Inner Content Start-->
<div class="innercontent property_submit">
  <div class="container">
    <h3 class="desc_head">Basic Information</h3>
    <div class="formcol">
      <form class="form mb-md50" id="contact-form" method="post" action="{{ route('send.proposal') }}"
      enctype="multipart/form-data">
        @csrf
        <div class="messages"></div>
        <div class="controls">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="title" placeholder="Property Title" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <select class="nice-select wide select_option" name="business_type" tabindex="0"> <span class="current">
                    <option data-value="Property Status" data-display="Property Status" class="option selected focus">Property Status</option>
                    <option value="For Sale" >For Sale</option>
                    <option value="For Rent" >For Rent</option>
                  </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                  <select class="nice-select wide select_option" name="category" tabindex="0"> <span class="current">
                    <option data-value="Property Status" data-display="Property Category" class="option selected focus">Property Category</option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}" >{{ $row->category_name }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                  <select class="nice-select wide select_option" name="size" tabindex="0"> <span class="current">
                    <option data-value="Property Status" data-display="Property Size (By Sqft)" class="option selected focus">Property Size (By Sqft)</option>
                    @foreach($size as $row)
                    <option value="{{ $row->id }}" >{{ $row->size }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <input type="text" class="form-control" name="location" placeholder="Area">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                  <select class="nice-select wide select_option" name="room" tabindex="0"> <span class="current">
                    <option data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Bedrooms</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="4" >4</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
                  </select>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                  <h4>Upload your photo</h4>
                  <p>It must be a head-shot photo</p>
                  <label class="uploadBox">Click here to Upload
                    <input type="file" name="image">
                  </label>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="p_address" placeholder="Address" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="city" placeholder="City" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="state" placeholder="State" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="zip" placeholder="Zip Code" required="">
              </div>
            </div>
          </div>
          <h3 class="desc_head mt30">Contact Details</h3>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="name" placeholder="Full Name" required="">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="phone" placeholder="Mobile No." required="">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="email" name="email" placeholder="Email" required="">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group has-error has-danger">
                <input id="form_name" class="form-control" type="text" name="address" placeholder="Address" required="">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group has-error has-danger">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
              </div>
            </div>
            <div class="col-lg-12 contact-wrap">
              <div class="contact-btn">
                <button type="submit" class="sub">Submit Now <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Inner Content End--> 
@endsection