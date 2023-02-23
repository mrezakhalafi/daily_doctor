		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Tambah Dokter</h2>
						</div>
					</div>

<div class="card">
	<div class="card-body">
	<form action="<?= base_url('TambahDokter/tambah') ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Nama</label>
			<input id="name" type="text" class="form-control" name="name" autofocus>
		</div>
	<div class="form-group">
		<label for="name">Jenis Kelamin</label><br />	
	<div class="custom-control custom-radio">
	  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="jk" value="Laki-Laki">
	  <label class="custom-control-label" for="defaultUnchecked">Laki-Laki</label>
	</div>
	<div class="custom-control custom-radio">
	  <input type="radio" class="custom-control-input" id="defaultChecked2" name="jk" value="Perempuan">
	  <label class="custom-control-label" for="defaultChecked2">Perempuan</label>
	</div>
	</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input id="username" type="text" class="form-control" name="username" autofocus>
		</div>
		<div class="form-group">
			<label for="username">Email</label>
			<input id="email" type="text" class="form-control" name="email" autofocus>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input id="password" type="password" class="form-control" name="password" autofocus>
		</div>
		<div class="form-group">
			<label for="spesialis">Spesialis</label>
			<input id="spesialis" type="text" class="form-control" name="spesialis" required autofocus>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input id="alamat" type="text" class="form-control" name="alamat" required autofocus>
		</div>
		<div class="form-group">
			<label for="rating">Rating</label>
			<input id="rating" type="text" class="form-control" name="rating" required autofocus>
			<small>* Masukan angka yang antara 0-5 (0 = Mengecewakan | 5 = Memuaskan )</small>
		</div>
		
		<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="foto">
    <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
  </div>
</div>
		</div>


		<div class="form-group no-margin">
			<button type="submit" class="btn btn-primary btn-block" style="width: 100px; float: right;">
				Tambah
			</button>
		</div>
	</form> 

</div>
</div>