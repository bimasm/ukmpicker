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
					@php
					$no=1;
					@endphp
					@foreach($data as $dt)
					<tr>
						<td class="no">{{$no++}}</td>
						<td>{{\App\Ukm::where('id',$dt->id_ukm)->value('nama')}}</td>
						<td>{{$dt->status}}</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>  
		</div>
	</div>
</div>

@endsection