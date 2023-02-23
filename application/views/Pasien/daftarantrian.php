		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Daftar Antrian</h2>
						</div>
					</div>

<div class="card">
	<div class="card-body">
	<form action="<?= base_url('pasien/DaftarAntrian/TambahAntrian') ?>" method="POST">
		<div class="form-group">
			<label for="name">Nama</label>
			<input id="name" type="text" class="form-control" name="name" value="<?= $user['nama'] ?>" readonly autofocus>
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
			<label for="keluhan">Keluhan</label>
			<input id="keluhan" type="text" class="form-control" name="keluhan" required autofocus>
		</div>
		<div class="form-group">
			<label for="name">Dokter</label>
			<br />
			<select class="form-control" name="id_dokter" id="jum_antrian">
				<option>Pilih Dokter</option>
				<?php foreach($dokter as $row) : ?>
				<option value="<?= $row['id'] ?>"><img src="<?= base_url('assets/img/dokter/')?><?= $row['foto'] ?>"><?= $row['nama'] ?></option>
					<?php endforeach; ?>
				</select>
		</div>

<?php $angka = ""; ?>

	<div class="form-group">
			<label for="hasil">Nomor Antrian</label>
			<input id="hasil" type="text" class="form-control" name="hasil" value="<?= $angka ?>" readonly autofocus>
		</div>

		<input type="hidden" name="id_pasien" value="<?= $user['id'] ?>">
		<input type="hidden" name="tanggal" value="<?= date('Y-m-d'); ?>">
		<div class="form-group no-margin">
			<button type="submit" class="btn btn-primary btn-block" style="width: 100px; float: right;">
				Daftar
			</button>
		</div>
	</form> 

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
window.localStorage.setItem('dokter', "");

var base_url = 'http://localhost/DailyDoctor/pasien/cek/';

$(document).on("change", "#jum_antrian", function() {
  if($(this).val() != '')
  {
   var action = 'cek'; 
   var query = $(this).val(); //ID DOKTER
   var result = 'hasil'; //ISI VAR KEMANA
   getDataAntrian(action, query, result);
  }
 });


function getDataAntrian(action, query, result){
  $.ajax({
    url : base_url,
    method:"POST",
    data:{postaction:action, query:query},
    success:function(data){
    if(data!=""){
    	    	console.log(data);
    var hasil2 = parseInt(data);
    var hasil3 = hasil2 +=1 ;
     $('#hasil').val(hasil3);
    }else{
    var hasil = 1;
    $('#hasil').val(hasil);
    }
    }
  })
}


</script>
