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
					<a href="{{route('ViewMahasiswaDetailUkm')}}" class="btn btn-success btn-rounded" style="width: 50%;">Detail</a>
				</center>
			</div>
		</div>
	</div>
	@endif
	@endforeach
	
</div>

@endsection