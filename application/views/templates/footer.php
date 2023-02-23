			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="http://www.kalbis.ac.id/">
									Kalbis Institute
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://www.kalbis.ac.id/">
									Bantuan
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2019, Designed by <a href="http://www.kalbis.ac.id/">KALBIS Institute Students</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

	<!-- Moment JS -->
	<script src="<?= base_url('assets/js/plugin/moment/moment.min.js') ?>"></script>

	<!-- Datatables -->
	
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	<!-- DateTimePicker -->
	<script src="<?= base_url('assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') ?>"></script>

	<!-- Select2 -->
	<script src="<?= base_url('assets/js/plugin/select2/select2.full.min.js') ?>"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url('assets/js/atlantis.min.js') ?>"></script>
</body>
</html>

<script>
	$(document).ready(function() {
    	$('#dokter').DataTable();
    	$('#antriansaya').DataTable();	
    	$('#konsultasi').DataTable();	
	} );
</script>