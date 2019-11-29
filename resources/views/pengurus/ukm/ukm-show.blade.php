@extends('pengurus.alayout.app')
@section('title')
<title>UKM | Pengurus</title>
@endsection
@section('title-breadcumb-1')
@foreach($data as $dt)
<h3>UKM {{$dt->nama}}</h3>
@endforeach
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
									@foreach($data as $dt)
									<p>{{$dt->deskripsi}}</p>
									@endforeach
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
												@php
												$no=1;
												@endphp
												@foreach($proker as $dt)
												<tr>
													<th scope="row">{{$no++}}</th>
													<td>{{$dt->proker}}</td>
													<td>
														<a href="{{url('pengurus/hapus/proker').'/'.$dt->id}}">
															<a href="ukm/delproker/{{$dt->id}}"><button type="button" class="btn btn-danger btn-rounded">Hapus</button></a>
														</a>
													</td>
												</tr>
												@endforeach
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
							@foreach($data as $dt)
							<center>
							<img src="../../{{$dt->logoukm}}" alt="" width="250" height="250">
							</center>
							@endforeach
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
								@php
								$no=1;
								@endphp
								@foreach($foto as $dt)
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">{{$no++}}</th>
									<td><img src="../../{{$dt->foto}}" alt="" width="100" height="100"></td>
									<td>
										<a href="ukm/delfoto/{{$dt->id}}"><button type="button" class="btn btn-danger btn-rounded">Hapus</button></a>
									</td>
								</tr>
								@endforeach
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
				<h5 class="modal-title" id="exampleModalLabel">Edit Ukm</h5>
			</div>
			@foreach($data as $dt)
			<form action="{{route('PostPengurusEditUkm')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Deskripsi</label>
						<textarea name="deskripsi" class="area form-control" rows="0" cols="50">
						</textarea>
					</div>
					
					<div class="form-group">
						<label for="exampleInputFile">Logo UKM</label>
						<input name="logoukm" type="file" id="exampleInputFile" class="up form-control">
						<input type="hidden" name="idukm" value="{{$dt->id}}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
			@endforeach
		</div>
	</div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Proker</h5>
			</div>
			<form action="{{route('PostPengurusAddProker')}}" method="post">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Proker</label>
						<textarea name="proker" class="area form-control" rows="0" cols="50">
						</textarea>
						@foreach($data as $dt)
						<input type="hidden" name="idukm" value="{{$dt->id}}">
						@endforeach
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
			</div>
			<form action="{{route('PostPengurusAddFoto')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputFile">Foto Gallery</label>
						<input name="foto" type="file" id="exampleInputFile" class="up form-control">
						@foreach($data as $dt)
						<input type="hidden" name="idukm" value="{{$dt->id}}">
						@endforeach
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection