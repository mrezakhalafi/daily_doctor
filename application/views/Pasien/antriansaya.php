		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Antrian Saya</h2>
						</div>
					</div>
					
					<table class="table" id="antriansaya">
						<thead class="">
							<td>No.Antrian</td>
							<td>Nama</td>
							<td>Jenis Kelamin</td>
							<td>Keluhan</td>
							<td>Status</td>
						</thead>

						<?php 
						foreach($antrian as $row): ?>
						<tr>
							<td><?= sprintf('%04d',$row['antrian']); ?></td>
							<td><?= $row['nama'] ?></td>
							<td><?php if($row['jk']=="Laki-Laki"): ?>
							<i style="color:#007bff; margin-left:30px; font-size:30px;" class="fas fa-mars"></i>
							<?php else: ?>
							<i style="color:#eb3474; margin-left:30px; font-size:30px;" class="fas fa-venus"></i>
							<?php endif; ?></td>
							<td><?= $row['keluhan'] ?></td>
							
							<?php if($row['status']==1): ?>
							<td>Berlangsung</td>
							<?php elseif($row['status']==2): ?>
							<td>Ditolak</td>
							<?php elseif($row['status']==3): ?>
							<td>Selesai</td>
							<?php else: ?>
							<td>Menunggu Konfirmasi</td>
							<?php endif; ?>
						</tr>
						<?php 
						endforeach; ?>
					</table>

				</div>
			</div>

<script>
window.localStorage.setItem('dokter', "");
</script>