@extends('admin.alayout.app')

@section('title')
<title>Pengurus | Admin</title>
@endsection

@section('title-breadcumb-1')
<h3>Pengurus</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Show Data</li>
@endsection

@section('konten')

<div class="panel panel-white u-rad">
	<div class="panel-heading clearfix">
		<h4 class="panel-title">Tabel Data Pengurus</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
				<thead>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama Pengurus</th>
						<th>Username</th>
						<th>Ukm</th>
						<th class="ac">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama Pengurus</th>
						<th>Username</th>
						<th>Ukm</th>
						<th class="ac">Action</th>
					</tr>
				</tfoot>
				<tbody>
					@php
					$no=1;
					@endphp
					@foreach($data as $dt)
					<tr>
						<td class="no">{{$no++}}</td>
						<td>{{$dt->nama}}</td>
						<td>{{$dt->username}}</td>
						<td>{{\App\Ukm::where('id', $dt->id)->value('nama')}}</td>
						<td class="ac">
							<a href="{{url('admin/deletepengurus').'/'.$dt->id}}"><button type="button" class="btn btn-danger btn-addon btn-rounded btn-sm"><i class="fa fa-trash"></i> Delete</button></a>
							<button type="button" class="btn btn-warning btn-addon btn-rounded btn-sm" data-toggle="modal" data-target="#modal{{$dt->id}}"><i class="fa fa-edit"></i> Edit</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>  
		</div>
	</div>
</div>
@foreach($data as $dt)
<div class="modal fade" id="modal{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Pengurus</h5>
			</div>
			<div class="modal-body">
				
					
					<form action="{{route('PostAdminEditPengurus')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$dt->nama}}">
					</div>
					<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
						<input type="text" name="username" class="form-control" value="{{$dt->username}}">
					</div>
					<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					
					
						<input type="hidden" name="id" value="{{$dt->id}}">

					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection