@extends('layouts.admin')

@section('admin_content')

@section('add.property','active')

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Property
          </h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Add Property</li>
          </ol>
        </section>
        <div class="box-header">
          <a href="{{ route('all.property') }}" type="button" class="btn btn-success pull-right ">
            All Property
          </a>
        </div>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
            		  <div class="box-body">
    		              <form action="{{ route('store.property') }}" method="post" enctype="multipart/form-data" >
    		              	@csrf
                        <div class="row">
                            <div class="form-group col-md-8">
                              <label>Property Title</label>
                              <input type="text" class="form-control" required="" value="" name="title">
                            </div>
                            <div class="col-sm-4" >
                              <div class="form-group">
                                <label>Location</label>
                                <select class="form-control" required="" name="location_id">
                                  <option></option>
                                  @foreach($location as $row) 
                                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                        </div>
    		                <div class="row" >
    		                	<div class="col-sm-3" >
    		                		<div class="form-group">
    		                		  <label>Property Category</label>
    		                		  <select class="form-control" required="" name="category_id">
    		                		  	<option></option>
    		                		  	@foreach($category as $row) 
    		                		  	<option value="{{ $row->id }}">{{ $row->category_name }}</option>
    		                		  	@endforeach
    		                		  </select>
    		                		</div>
    		                	</div>
    		                	<div class="col-sm-3" >
    		                		<div class="form-group">
    		                		  <label>Property Type</label>
    		                		  <select class="form-control" required="" name="type_id">
    		                		  	<option></option>
    		                		  	@foreach($type as $row) 
    		                		  	<option value="{{ $row->id }}">{{ $row->subcategory_name }}</option>
    		                		  	@endforeach
    		                		  </select>
    		                		</div>
    		                	</div>
    		                	<div class="col-sm-2" >
    		                		<div class="form-group">
    		                		  <label>Property Status</label>
    		                		  <select class="form-control" required="" name="business_type">
    		                		  	<option></option>
    		                		  	<option value="1">For Sale</option>
    		                		  	<option value="0">For Rent</option>
    		                		  </select>
    		                		</div>
    		                	</div>
    		                	<div class="col-sm-2" >
    		                		<div class="form-group">
    		                		  <label>Front Page</label>
    		                		  <select class="form-control" required="" name="front_page">
    		                		  	<option></option>
    		                		  	<option value="1">Yes</option>
    		                		  	<option value="0">No</option>
    		                		  </select>
    		                		</div>
    		                	</div>
                          <div class="col-sm-2" >
                            <div class="form-group">
                              <label>Property Size</label>
                              <select class="form-control" required="" name="size_id">
                                <option></option>
                                @foreach($size as $row) 
                                <option value="{{ $row->id }}">{{ $row->size }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
{{--                           <div class="col-sm-2" >
                            <div class="form-group">
                              <label>Popular Place</label>
                              <select class="form-control" required="" name="popular_place">
                                <option></option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                              </select>
                            </div>
                          </div> --}}
    		                </div>
    		                <div class="row" >
    		                	<div class="form-group col-sm-10 ">
    		                	  <label>Property Thumbnail</label>
    		                	  <input type="file" class="form-control" name="image" onchange="readURL1(this);">
    		                	</div>
    		                	<div class="form-group col-sm-2 ">
    		                		<img src="#" id="one" >
    		                	</div>
    		                </div>
    		                <div class="form-group">
    		                  <label>Property description</label>
    		                  <textarea type="text" class="form-control textarea" required="" name="description" ></textarea>
    		                </div><br>
    		                <div class="form-group">
    		                  <label>Property Details</label>
    		                  <textarea type="text" class="form-control textarea" required="" name="details" ></textarea>
    		                </div><br>
    		                <div class="form-group">
    		                  <label>Property featurs</label>
    		                  <textarea type="text" class="form-control textarea" required="" name="featurs" ></textarea>
    		                </div>
                        <div class="row" >
                          <div class="form-group col-md-6">
                              {{-- <label>More Images</label>             
                                <input type="file" class="form-control" onchange="FileImage(this);" name="images[]" multiple /> --}}
                                <div class="table-responsive">  
                                  <table class="table table-bordered" id="dynamic_field">  
                                    <tr> 
                                        <label>More Images</label> 
                                        <td><input type="file" name="images[]" class="form-control name_list" /></td>  
                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                                  </table>    
                                </div>                 
                          </div>
                          <div class="form-group col-md-6">
                              {{-- <label>Floor Plan</label>             
                                <input type="file" class="form-control" onchange="FileImage(this);" name="floor_plan[]" multiple /> --}}
                                <div class="table-responsive">  
                                  <table class="table table-bordered" id="dynamic_field1">  
                                    <tr> 
                                        <label>Floor Plan</label> 
                                        <td><input type="file" name="floor_plan[]" class="form-control name_list" /></td>  
                                        <td><button type="button" name="add1" id="add1" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                                  </table>    
                                </div>                  
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Video Link</label>
                          <textarea class="form-control" name="video_link" placeholder="Ex: http://" style="height: 150px;" ></textarea>
                        </div>
                        <div class="form-group">
                          <label>Creat Your Map:</label>
                          <a class="text-info" target="blank" href="https://www.maps.ie/create-google-map/">Click Here</a>
                        </div>
                        <div class="form-group">
                          <label>Enter Full Embed Code (hight-330) :</label>
                          <textarea class="form-control" name="map" placeholder="Embed Code" >
                          </textarea>
                        </div>
                		    <div class="box-footer">
                			   <button type="submit" class="btn btn-primary">Submit</button>
                		    </div>
            		  	  </form>
                		</div>
            		</div>
              </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- Import repeater js  -->
   {{--  <script src="{{ asset('public/backend/js/repeater.js') }}" type="text/javascript"></script>

    <script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    	function readURL1(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#one')
                      .attr('src', e.target.result)
                      .width(120)
                      .height(80);
              };
              reader.readAsDataURL(input.files[0]);
          }
       }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){      
          var postURL = "<?php echo url('addmore'); ?>";
          var i=1;  


          $('#add').click(function(){  
               i++;  
               $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="images[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
          });  


          $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
          });  
        });  
    </script>

    <script type="text/javascript">
        $(document).ready(function(){      
          var postURL = "<?php echo url('addmore'); ?>";
          var i=1;  


          $('#add1').click(function(){  
               i++;  
               $('#dynamic_field1').append('<tr id="row1'+i+'" class="dynamic-added"><td><input type="file" name="floor_plan[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove1">X</button></td></tr>');  
          });  


          $(document).on('click', '.btn_remove1', function(){  
               var button_id = $(this).attr("id");   
               $('#row1'+button_id+'').remove();  
          });  
        });  
    </script>

@endsection