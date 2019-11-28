@extends('mahasiswa.alayout.app')

@section('title')
<title>Pendaftaran | Mahasiswa</title>
@endsection

@section('title-breadcumb-1')
<h3>Pendaftaran</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Pendaftaran</li>
@endsection

@section('konten')

<div class="panel panel-white u-rad">
	<div class="panel-heading clearfix">
		<h4 class="panel-title">Tabel Data Pendaftar anda</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
				<thead>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama UKM</th>
						<th>Status</th>
					</tr>
				</thead>
				<tfoot>
					<tr class="no">
						<th class="no">No</th>
						<th>Nama UKM</th>
						<th>Status</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td class="no">1</td>
						<td>UKM Djawa</td>
						<td>Status</td>
					</tr>
				</tbody>
			</table>  
		</div>
	</div>
</div>

@endsection