@extends('mahasiswa.alayout.app')

@section('title')
<title>UKM Detail | Mahasiswa</title>
@endsection

@section('title-breadcumb-1')
<h3>UKM</h3>
@endsection

@section('title-breadcumb-2')
<li><a href="{{route('ViewMahasiswaUkm')}}"></a>UKM</li>
<li class="active">UKM Djawa</li>
@endsection

@section('konten')

<div class="row">
	<div class="col-lg-12 col-md-12">
		<form action="{{route('PostMahasiswaPendaftaran')}}" method="post">
			@csrf
			<input type="hidden" name="idukm" value="">
			<input type="hidden" name="idmhs" value="{{Auth::guard('mahasiswa')->user()->id}}">
			<button type="submit" class="btn btn-success">Daftar Sekarang</button>
		</form>
		<br>
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
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Proker</td>
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

<div id="main-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-white">
				<div class="panel-body">
					<div id="grid-gallery" class="grid-gallery">

						<section class="grid-wrap">
							<ul class="grid">
								<li class="grid-sizer"></li>
								<li>
									<figure>
										<img src="assets/images/gallery/book01.jpg" alt="img01"/>
									</figure>
								</li>
								<li>
									<figure>
										<img src="assets/images/gallery/book02.jpg" alt="img02"/>
									</figure>
								</li>

							</ul>
						</section>

						<section class="slideshow">
							<ul>
								<li>
									<figure>
										<img src="assets/images/gallery/book01.jpg" alt="img01"/>
									</figure>
								</li>
								<li>
									<figure>
										<img src="assets/images/gallery/book02.jpg" alt="img02"/>
									</figure>
								</li>

							</ul>
							<nav>
								<span class="fa fa-angle-left nav-prev"></span>
								<span class="fa fa-angle-right nav-next"></span>
								<span class="fa fa-times nav-close"></span>
							</nav>
						</section>

					</div>
				</div>
			</div>
		</div>
	</div><!-- Row -->
</div><!-- Main Wrapper -->

@endsection