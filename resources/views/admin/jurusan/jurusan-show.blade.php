@extends('admin.alayout.app')

@section('title')
<title>Jurusan | Admin</title>
@endsection

@section('title-breadcumb-1')
<h3>Jurusan</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Show Data</li>
@endsection

@section('konten')

<div class="panel panel-white u-rad">
	<div class="panel-heading clearfix">
		<h4 class="panel-title">Tabel Data Jurusan</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
				<thead>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama Jurusan</th>
						<th class="ac">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama Jurusan</th>
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
						<td class="ac">
							<button type="button" class="btn btn-danger btn-addon btn-rounded btn-sm"><i class="fa fa-trash"></i> Delete</button>
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
				<h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Jurusan</label>
					<form action="{{route('PostAdminEditJurusan')}}" method="post">
						@csrf
						<input type="text" name="namajurusan" class="form-control" value="{{$dt->nama}}">
						<input type="hidden" name="id" value="{{$dt->id}}">

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection