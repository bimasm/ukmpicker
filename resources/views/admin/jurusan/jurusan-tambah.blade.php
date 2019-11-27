@extends('admin.alayout.app')

@section('title')
<title>Jurusan | Admin</title>
@endsection

@section('title-breadcumb-1')
<h3>Jurusan</h3>
@endsection

@section('title-breadcumb-2')
<li class="active">Tambah Data Jurusan</li>
@endsection

@section('konten')

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-heading clearfix">
				<h4 class="panel-title">Form Tambah Jurusan</h4>
			</div>
			<div class="panel-body">
				<form action="{{route('PostAdminTambahJurusan')}}" method="POST" class="form-horizontal">
					@csrf				
					<div class="form-group">
						<label for="input-rounded" class="col-sm-2 control-label">Nama Jurusan</label>
						<div class="col-sm-10">
							<input name="namajurusan" type="text" class="form-control input-rounded" id="input-rounded">
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