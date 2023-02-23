		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Tabel Dokter</h2>
						</div>
					</div>
					
					<table class="table" id="antriansaya">
						<thead class="">
							<td>No.</td>
							<td></td>
							<td>Nama</td>
							<td>Username</td>
							<td>Jenis Kelamin</td>
							<td>Spesialis</td>
							<td>Alamat</td>
							<td>Rating</td>
							<td>Action</td>
						</thead>

						<?php 
						$i = 1;
						foreach($dokter as $row): ?>
						<tr>
							<td><?= $i ?></td>
							<td><img class="avatar rounded-circle" src="<?= base_url('assets/img/dokter/').$row['foto'] ?>"></td>
							<td><?= $row['nama'] ?></td>
							<td><?= $row['username'] ?></td>
							<td><?php if($row['jk']=="Laki-Laki"): ?>
							<i style="color:#007bff; margin-left:30px; font-size:30px;" class="fas fa-mars"></i>
							<?php else: ?>
							<i style="color:#eb3474; margin-left:30px; font-size:30px;" class="fas fa-venus"></i>
							<?php endif; ?></td>
							<td><?= $row['spesialis'] ?></td>
							<td><?= $row['alamat'] ?></td>
							<td><?= $row['rating'] ?></td>
							<td><a href="<?= base_url('admin/hapus/') ?><?= $row['id'] ?>"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
						</tr>
						<?php 
						$i++;
						endforeach; ?>
					</table>

				</div>
			</div>