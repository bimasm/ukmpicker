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
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading clearfix center-a">
				<h4>UKM Djawa</h4>
			</div>
			<hr>
			<div class="panel-body">
				<center>
					<img class="img-circle" src="#" alt="">
					<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal2" style="width: 50%;">Detail</button>
				</center>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading clearfix center-a">
				<h4>UKM Bola</h4>
			</div>
			<hr>
			<div class="panel-body">
				<center>
					<img class="img-circle" src="#" alt="">
					<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal2" style="width: 50%;">Detail</button>
				</center>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading clearfix center-a">
				<h4>UKM Sawanda</h4>
			</div>
			<hr>
			<div class="panel-body">
				<center>
					<img class="img-circle" src="#" alt="">
					<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal2" style="width: 50%;">Detail</button>
				</center>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail UKM</h5>
			</div>
			<div class="modal-body">
				<div class="panel panel-white">
					<div class="panel-heading">
						<div class="panel-title">Deskripsi</div>
					</div>
					<div class="panel-body">
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
					</div>
				</div>

				<div class="panel panel-white">
					<div class="panel-heading">
						<div class="panel-title">Proker</div>
					</div>
					<div class="panel-body">
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Daftar</button>
			</div>
		</div>
	</div>
</div>

@endsection