@extends('pengurus.alayout.app')

@section('title')
<title>UKM | Pengurus</title>
@endsection

@section('title-breadcumb-1')
<h3>UKM</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Profile UKM</li>
@endsection

@section('konten')
<div class="row">
	<div class="col-md-3">
		<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal2">Edit Data</button>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="panel panel-white">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="visitors-chart">
								<div class="panel-heading">
									<h4 class="panel-title">Deskripsi</h4>
								</div>
								<div class="panel-body">
									<p>tes</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="visitors-chart">
								<div class="panel-heading">
									<h4 class="panel-title">Proker</h4>
								</div>
								<div class="panel-body">
									<p>tes</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="stats-info">
						<div class="panel-heading">
							<h4 class="panel-title">Logo UKM</h4>
						</div>
						<div class="panel-body">
							<div class="col-md-3 profile-image">
								<div class="profile-image-container">
									<img src="assets/images/profile-picture.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Deskripsi</label>
					<textarea name="deskripsi" class="area form-control" rows="0" cols="50">
					</textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Proker</label>
					<textarea name="deskripsi" class="area form-control" rows="0" cols="50">
					</textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Logo UKM</label>
					<input name="logoukm" type="file" id="exampleInputFile" class="up form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save changes</button>
			</div>
		</div>
	</div>
</div>

@endsection