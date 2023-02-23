		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">History Konsultasi</h2>
						</div>
					</div>
					
					<table class="table" id="konsultasi">
						<thead class="">
							<td>No.Antrian</td>
							<td>Nama</td>
							<td>Jenis Kelamin</td>
							<td>Keluhan</td>
							<td>Tanggal</td>
						</thead>

						<?php 
						$i = 1;
						foreach($antrian as $row): ?>
						<tr>
							<td><?= sprintf('%04d', $row['antrian']); ?></td>
							<td><?= $row['nama'] ?></td>
							<td><?php if($row['jk']=="Laki-Laki"): ?>
							<i style="color:#007bff; margin-left:30px; font-size:30px;" class="fas fa-mars"></i>
							<?php else: ?>
							<i style="color:#eb3474; margin-left:30px; font-size:30px;" class="fas fa-venus"></i>
							<?php endif; ?></td>
							<td><?= $row['keluhan'] ?></td>
							<td><?= date("d/m/Y", strtotime($row['tanggal'])) ?></td>
						</tr>
						<?php 
						$i++;
						endforeach; ?>
					</table>

				</div>
			</div>