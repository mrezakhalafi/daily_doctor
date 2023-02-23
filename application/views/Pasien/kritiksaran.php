		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Kritik & Saran</h2>
						</div>
					</div>

<div class="card">
	<div class="card-body">
	<form action="<?= base_url('pasien/kritiksaran/TambahKritik') ?>" method="POST">
		<div class="form-group">
			<label for="name">Nama</label>
			<input id="name" type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>" readonly autofocus>
		</div>
		
		<?php
		$dob = new DateTime($user["tgl_lahir"]);
		$today = new DateTime;
		$age = $today->diff($dob);

		$umur =  $age->format('%y');
		?>

		<div class="form-group">
			<label for="umur">Umur</label>
			<input id="umur" type="text" class="form-control" name="umur" value="<?= $umur ?>" readonly autofocus>
		</div>
		<div class="form-group">
			<label for="name">Dokter</label>
			<br />
			<select class="form-control" name="id_dokter">
				<?php foreach($dokter as $row) : ?>
				<option value="<?= $row['id'] ?>"> <?= $row['nama'] ?></option>
					<?php endforeach; ?>
				</select>
		</div>
		<div class="form-group">
			<label for="keluhan">Kritik & Saran</label>
			<input id="keluhan" type="text" class="form-control" name="kritik" required autofocus>
		</div>
		<div class="form-group">
			<label for="rating">Rating</label>
			<input id="rating" type="text" class="form-control" name="rating" required autofocus>
			<small>* Masukan angka yang antara 0-5 (0 = Mengecewakan | 5 = Memuaskan )</small>
		</div>
		<input type="hidden" name="id_pasien" value="<?= $user['id'] ?>">
		<div class="form-group no-margin">
			<button type="submit" class="btn btn-primary btn-block" style="width: 100px; float: right;">
				Kirim
			</button>
		</div>
	</form> 

</div>
</div>

<script>
window.localStorage.setItem('dokter', "");
</script>
