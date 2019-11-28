@extends('mahasiswa.alayout.app')

@section('title')
<title>UKM | Mahasiswa</title>
@endsection

@section('title-breadcumb-1')
<h3>UKM</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">UKM</li>
@endsection

@section('konten')

<div class="row">
	@foreach($data as $dt)
	@if(\App\Pendaftar::where('id_mahasiswa', Auth::guard('mahasiswa')->user()->id)->where('id_ukm',$dt->id)->count()<1)
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading clearfix center-a">
				<h4>UKM {{$dt->nama}}</h4>
			</div>
			<hr>
			<center><img src="../{{$dt->logoukm}}" alt="" width="220" height="220"></center>
			<hr>
			<div class="panel-body">
				<center>
					<img class="img-circle" src="#" alt="">
					<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal{{$dt->id}}" style="width: 50%;">Detail</button>
				</center>
			</div>
		</div>
	</div>
	@endif
	@endforeach
	
</div>
@foreach($data as $dt)
<div class="modal fade" id="modal{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail UKM {{$dt->nama}}</h5>
			</div>
			<div class="modal-body">
				<div class="panel panel-white">
					<div class="panel-heading">
						<div class="panel-title">Deskripsi</div>
					</div>
					<div class="panel-body">
						<p>{{$dt->deskripsi}}</p>
					</div>
				</div>

				<div class="panel panel-white">
					<div class="panel-heading">
						<div class="panel-title">Proker</div>
					</div>
					<div class="panel-body">
						<ul>proker 1</ul>
						<ul>proker 2</ul>
					</div>
				</div>
				<div class="panel panel-white">
					<div class="panel-heading">
						<div class="panel-title">Foto kegiatan</div>
					</div>
					<div class="panel-body">
						gambar gambar gambar
					</div>
				</div>
			</div>
			<form action="{{route('PostMahasiswaPendaftaran')}}" method="post">
				@csrf
			<input type="hidden" name="idukm" value="{{$dt->id}}">
			<input type="hidden" name="idmhs" value="{{Auth::guard('mahasiswa')->user()->id}}">
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Daftar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection