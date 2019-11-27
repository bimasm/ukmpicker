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
		<button type="button" class="btn btn-success btn-rounded">Edit Data</button>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="panel panel-white">
			<div class="row">
				<div class="col-sm-8">
					<div class="visitors-chart">
						<div class="panel-heading">
							<h4 class="panel-title">Deskripsi</h4>
						</div>
						<div class="panel-body">
							<p>tes</p>
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

@endsection