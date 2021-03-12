@extends('layouts.admin')
@section('all.property','active')
@section('admin_content')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Property
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">All Property</li>
      </ol>
    </section>
    <br>
    <div class="box-header">
    	<a href="{{ route('add.property') }}" type="button" class="btn btn-success pull-right ">
    	  Add Property
    	</a>
    </div>
      <div class="box-body">
    	<div class="table-responsive">
		  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
			<thead>
				<tr>
					<th>SL</th>
					<th>Title</th>
					<th>Category</th>
					<th>Type</th>
					<th>Image</th>
					<th>Front</th>
					<th>status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($property as $row)
			  <tr>
			    <td>{{ $no ++ }}</td>
			    <td>{{ $row->title }}</td>
			    <td>{{ $row->category_name }}</td>
			    <td>{{ $row->subcategory_name }}</td>
			    <td>
			    	<img src="{{ asset($row->image) }}" style="height: 40px; width: 70px;" >
			    </td>
			    <td>
			    	@if($row->front_page == 1)
			    		Yes
			    	@else
			    		No
			    	@endif
			    </td>
			    <td>
			    	@if($row->status == 1)
			    		<span class="badge badge-success" >Active</span>
			    	@else
			    		<span class="badge badge-danger" >Deactive</span>
			    	@endif
			    </td>
			    <td>
			    	@if($row->status == 1)
			    	  <a class="btn btn-sm btn-success" href="{{ route('active.property',$row->id) }}"> <i class="fa fa-thumbs-up"></i></a>
			    	@else
			    	  <a class="btn btn-sm btn-warning" href="{{ route('deactive.property',$row->id) }}"> <i class="fa fa-thumbs-down"></i></a>
			    	@endif
		    	  <a class="btn btn-sm btn-info" href="{{ route('view.property',$row->id) }}"> <i class="fa fa-eye"></i></a>
		    	  <a class="btn btn-sm btn-success" href="{{ route('edit.property',$row->id) }}"> <i class="fa fa-edit"></i></a>
		    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.property',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
			    </td>
			  </tr>
			  @endforeach
			</tbody>
			<tfoot>
				<tr>
					<th>SL</th>
					<th>Title</th>
					<th>Category</th>
					<th>Type</th>
					<th>Image</th>
					<th>Front</th>
					<th>status</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>
    	</div>
      </div>
  </div>
</div>
  @endsection