@extends('pengurus.alayout.app')

@section('title')
<title>Mahasiswa | Pengurus</title>
@endsection

@section('title-breadcumb-1')
<h3>Mahasiswa</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Mahasiswa masuk</li>
@endsection

@section('konten')

<div class="panel panel-white u-rad">
	<div class="panel-heading clearfix">
		<h4 class="panel-title">Tabel Data Mahasiswa Masuk</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
				<thead>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Status</th>
						<th class="ac">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Status</th>
						<th class="ac">Action</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td class="no">1</td>
						<td>Sita love Baim</td>
						<td>Sistem Informasi</td>
						<td>Status</td>
						<td>
							<button type="button" class="btn btn-warning btn-rounded">Pending</button>
							<button type="button" class="btn btn-success btn-rounded">Terima</button>
							<button type="button" class="btn btn-danger btn-rounded">Tolak</button>
						</td>
					</tr>
				</tbody>
			</table>  
		</div>
	</div>
</div>

@endsection