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
	<div class="col-md-5">
		<div class="col-md-3">
			<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal2">Edit Data</button>
		</div>
		<div class="col-md-4">
			<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal3">Tambah Proker</button>
		</div>
		<div class="col-md-4">
			<button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal4">Tambah Gallery</button>
		</div>
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
									
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>No</th>
													<th>Proker</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Proker</td>
													<td>
														<button type="button" class="btn btn-warning btn-rounded">Edit</button>
														<button type="button" class="btn btn-danger btn-rounded">Hapus</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>

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

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="visitors-chart">
				<div class="panel-heading">
					<h4 class="panel-title">Image</h4>
				</div>
				<div class="panel-body">

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td><img src="assets/images/post-image.jpg" alt=""></td>
									<td>
										<button type="button" class="btn btn-danger btn-rounded">Hapus</button>
									</td>
								</tr>
							</tbody>
						</table>
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
					<textarea name="proker" class="area form-control" rows="0" cols="50">
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

<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Proker</h5>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Proker</label>
					<textarea name="proker" class="area form-control" rows="0" cols="50">
					</textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputFile">Foto Gallery</label>
					<input name="foto" type="file" id="exampleInputFile" class="up form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
	</div>
</div>

@endsection