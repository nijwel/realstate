@extends('layouts.admin')
@section('admin_content')
@section('outmail','active')

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Out Mail Box
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Out Mail Box</li>
      </ol>
    </section>
      <br>
    <!-- Main content -->
    <section class="content">
    	<form action="{{ route('all.delete') }}" method="get" >
    	<button class="btn-sm btn-danger" type="submit">All Delete</button>
    	<br>
    	<br>
      <div class="row">
        <div class="col-12">
          <div class="box">
            <!-- /.box-header -->
         <div class="box-body">
				  <div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
					<thead>
						<tr>
							<th></th>
							<th>SL</th>
							<th>To</th>
							<th>Subject</th>
							<th>Messege</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($outmail as $row)
					  <tr>
					    <td>
					    	<div class="checkbox">
                    		<input type="checkbox" value="{{ $row->id }}" name="checked[]" id="{{ $row->id }}">
							<label for="{{ $row->id }}"></label>                  
                			</div>
					    </td>
					    <td>{{ $no ++ }}</td>
					    <td>{{ $row->email }}</td>
					    <td>{{ $row->subject }}</td>
					    <td>{!! Str::limit($row->message, 50) !!}</td>
					    <td>{{ $row->created_at->format('d-M-Y') }}</td>
					    <td>
				    	  <a class="btn btn-sm btn-primary" href="{{ route('view.out_mail',$row->id) }}"> <i class="fa fa-eye"></i></a>
				    	  <a class="btn btn-sm btn-danger" id="delete" href="{{ route('delete.out_mail',$row->id) }}"> <i class="fa fa-trash" title="delete" aria-hidden="true"></i></a>
					    </td>
					  </tr>
					  @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th></th>
							<th>SL</th>
							<th>To</th>
							<th>Subject</th>
							<th>Messege</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
    </div>
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection