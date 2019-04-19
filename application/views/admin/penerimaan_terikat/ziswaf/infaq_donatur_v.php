<!DOCTYPE html>
<html lang="en" style="z-index: 1">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<div>
		<?php $this->load->view("admin/_partials/navbar.php") ?>
		<div id="wrapper">

			<?php $this->load->view("admin/_partials/sidebar.php") ?>

			<div id="content-wrapper">

				<div class="container-fluid navbar-fixed">
					<!-- initials -->
					<?php 
					$xjenis = "Infaq dari Donatur"; 
					$xkode_akunD = "101";
					$xkode_akunK = "401";
					$xkode_sub = "1231";
					$xp_jenis = "ZISWAF";
					?>
					<!-- end initials -->
					<?php $this->load->view("admin/_partials/breadcrumb.php");
					echo "<div id='judulJenis' style='text-align:center;font-weight:bold'> $xjenis </div>"; ?>
					

					

					<!-- Form -->
					
					<section id="form" class="container-fluid" style="margin-left:100px;">
						<form class="ml-60" action="<?=base_url().'admin/penerimaan_terikat/insert'?>" method="post" enctype="multipart/form-data">
							<div class=" form-row">
								<div class="col-6">
									<div class="form-group">
										<label for="tanggal">Tanggal Transaksi</label>
										<input type="date" class="form-control" name="tanggal" required>
									</div>
									<div class="form-group">
										
										<input type="hidden" class="form-control" name="kode_akunD" value="<?php echo $xkode_akunD;?>" hidden>
									</div>
									<div class="form-group">
										
										<input type="hidden" class="form-control" name="kode_akunK" value="<?php echo $xkode_akunK;?>" hidden>
									</div>
									<div class="form-group">
										
										<input type="hidden" class="form-control" name="jenis" value="<?php echo $xjenis;?>" hidden>
									</div>
									<div class="form-group">
										
										<input type="hidden" class="form-control" name="p_jenis" value="<?php echo $xp_jenis;?>" hidden>
									</div>
									<div class="form-group">
										
										<input type="hidden" class="form-control" name="kode_sub" value="<?php echo $xkode_sub;?>" hidden>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="pemberi">Nama Pemberi</label>
										<input type="text" class="form-control" name="pemberi" placeholder="Masukkan Nama Pemberi" required>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-6">
									<div class="form-group">
										<label for="nominal">Nominal</label>
										<input type="number" class="form-control" name="nominal" placeholder="Masukkan Nominal" required>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="keterangan">Keterangan</label>
										<input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" required>
									</div>
								</div>
							</div>
							<button class="btn btn-primary btn-input" type="submit" style="float:left !important;margin-left: -25px;margin-bottom: 40px" name="submit">Kirim</button>
						</form>
					</section>

					<!-- Form udahan -->
					<!-- DataTables -->
					<?php $this->load->view("admin/_partials/tampilInput.php") ?>
					<!-- end datatables -->

				</div>
				<!-- /.container-fluid -->
				<!-- /.content-wrapper -->
			</div>
			<!-- /#wrapper -->
		</div>


		<?php $this->load->view("admin/_partials/modal.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>
	</body>

	</html>