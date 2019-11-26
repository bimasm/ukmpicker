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
						<th>Password</th>
						<th class="ac">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama Pengurus</th>
						<th>Username</th>
						<th>Password</th>
						<th class="ac">Action</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td class="no">1</td>
						<td>Siatem Informasi</td>
						<td>Siatem Informasi</td>
						<td>Siatem Informasi</td>
						<td class="ac">
							<button type="button" class="btn btn-danger btn-addon btn-rounded btn-sm"><i class="fa fa-trash"></i> Delete</button>
							<button type="button" class="btn btn-warning btn-addon btn-rounded btn-sm"><i class="fa fa-edit"></i> Edit</button>
						</td>
					</tr>
				</tbody>
			</table>  
		</div>
	</div>
</div>

@endsection