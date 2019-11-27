@extends('admin.alayout.app')

@section('title')
<title>Mahasiswa | Admin</title>
@endsection

@section('title-breadcumb-1')
<h3>Mahasiswa</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Tambah Data Mahasiswa</li>
@endsection

@section('konten')

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-heading clearfix">
				<h4 class="panel-title">Form Tambah Mahasiswa</h4>
			</div>
			<div class="panel-body">
				<form action="{{route('PostAdminTambahMahasiswa')}}" method="POST" class="form-horizontal">
					@csrf				
					<div class="form-group">
						<label for="input-rounded" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input name="nama" type="text" class="form-control input-rounded" id="input-rounded">
						</div>
					</div>
					<div class="form-group">
						<label for="input-rounded" class="col-sm-2 control-label">NIM</label>
						<div class="col-sm-10">
							<input name="nim" type="text" class="form-control input-rounded" id="input-rounded">
						</div>
					</div>
					<div class="form-group">
						<label for="input-rounded" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input name="password" type="password" class="form-control input-rounded" id="input-rounded">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jurusan</label>
						<div class="col-sm-10">
							<select name="jurusan" class="form-control m-b-sm">
								@foreach($jurusan as $jr)
								<option value="{{$jr->id}}">{{$jr->nama}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<center>
								<button type="submit" class="btn btn-success btn-rounded" style="width: 50%;">Sumbit</button>
							</center>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection