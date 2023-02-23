		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Lihat Antrian</h2>
						</div>
					</div>
					
					<table class="table" id="antriansaya">
						<label>Cari Antrian Dokter : </label> 
						<div class="row">
							<div class="col-md-10">
					<div class="form-group">
						<!-- <label for="name">Dokter</label> -->
							<select id="lihat" class="form-control" name="id_dokter">
								<?php foreach($dokter as $row) : ?>
								<option value="<?= $row['id'] ?>"> <?= $row['nama'] ?></option>
								<?php endforeach; ?>
							</select>
					</div>

		<input type="hidden" name="id_pasien" value="<?= $user['id'] ?>">
		<div class="form-group no-margin">
		</div>
	</div>
		<div class="col-md-2 mt-2">
		<button id="tombol_cari" type="submit" class="btn btn-primary btn-block" style="width: 100px;">
				Cari
			</button>
		</div>
	</div>


						<thead class="">
							<td>No.Antrian</td>
							<td>Nama</td>
							<td>Jenis Kelamin</td>
						</thead>

						<?php 
						$i = 1;
						foreach($antrian as $row): ?>
						<tr>
							<td><?= sprintf('%04d',$i); ?></td>
							<td><?= $row['nama'] ?></td>
							<td><?php if($row['jk']=="Laki-Laki"): ?>
							<i style="color:#007bff; margin-left:30px; font-size:30px;" class="fas fa-mars"></i>
							<?php else: ?>
							<i style="color:#eb3474; margin-left:30px; font-size:30px;" class="fas fa-venus"></i>
							<?php endif; ?></td>
						</tr>
						<?php 
						$i++;
						endforeach; ?>
					</table>

				</div>
			</div>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			<script>

var dokter = window.localStorage.getItem('dokter');

$("#lihat").val(dokter);


				$('#tombol_cari').on('click', function() {
  				function lihatDokter() { 
  					var id_dokter = $('#lihat').val();
  					window.location.href = 'http://localhost/DailyDoctor/pasien/lihatAntrian/dokter/'+id_dokter;
  					window.localStorage.setItem('dokter', id_dokter);
					}

				lihatDokter();
				});
			</script>