@extends('admin.alayout.app')

@section('title')
<title>UKM | Admin</title>
@endsection

@section('title-breadcumb-1')
<h3>UKM</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Tambah Data UKM</li>
@endsection

@section('konten')

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-heading clearfix">
				<h4 class="panel-title">Form Tambah UKM</h4>
			</div>
			<div class="panel-body">
				<form action="{{route('PostAdminTambahUkm')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
					@csrf				
					<div class="form-group">
						<label for="input-rounded" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input name="namaukm" type="text" class="form-control input-rounded" id="input-rounded">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea name="deskripsi" class="area" rows="4" cols="120">

							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile" class="col-sm-2 control-label">Logo UKM</label>
						<div class="col-sm-10">
							<input name="logoukm" type="file" id="exampleInputFile" class="up">
						</div>
					</div>
					<br>
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