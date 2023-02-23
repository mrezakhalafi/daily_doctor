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
							<td>Action</td>
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
							<td><?= $row['keluhan'] ?></td>
							<td>
							<?php if($row['status']==0): ?>
<!-- 
								<form action="<?= base_url('dokter/antrianSaya/konfirmasi') ?>/<?= $row['id'] ?>" method="POST"> -->

								<a href="<?= base_url('dokter/antriansaya/ditolak') ?>/<?= $row['id'] ?>"><button type="button" class="btn btn-sm btn-dark tolak">Tolak</button></a>&nbsp;<a href="<?= base_url('dokter/antriansaya/konfirmasi') ?>/<?= $row['id'] ?>"><button class="btn btn-sm btn-warning konfirmasi">Konfirmasi</button></a>

								<!-- </form> -->
							<?php elseif($row['status']==2): ?>
							Ditolak
							<?php elseif($row['status']==1): ?>
								<a href="<?= base_url('dokter/antriansaya/selesai') ?>/<?= $row['id'] ?>"><button class="btn btn-sm btn-primary selesai">Selesai</button></a>
							<?php else: ?>
							Selesai
							<?php endif; ?>
						</tr>
						<?php 
						$i++;
						endforeach; ?>
					</table>

				</div>
			</div>