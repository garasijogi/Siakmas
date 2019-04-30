<!-- form input -->
<section id="form" class="container-fluid" style="margin:auto;">
	<form class="ml-60" action="<?=base_url().'admin/penerimaan_terikat/proses'?>" method="post" enctype="multipart/form-data">
		<div class=" form-row">
			<div class="col-6">
				<div class="form-group">
					<label for="tanggal">Tanggal Transaksi</label>
					<input type="date" class="form-control" name="tanggal" required>
				</div>
				<div class="form-group">

					<input type="hidden" class="form-control" name="kode_sub" value="<?php echo $kode_sub;?>" hidden>
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
<!-- /form input -->