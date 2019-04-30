<!DOCTYPE html>
<html lang="en" style="z-index: 1">

<!-- header -->
<head>
	<title><?php echo($nama_sub);?> - siakmas</title>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<!-- page content -->
<body id="page-top">


<div id="content-wrapper" style="margin-top: 75px;">
	<!-- Navbar dan Sidebar -->
	<div class="noprint">
		<?php  $this->load->view("admin/_partials/navbar.php") ?>
		<div class="wrapper">
			<?php $this->load->view("admin/_partials/sidebar.php")  ?>
		</div>
	</div>
	<div class="container-fluid navbar" style="margin: auto;" />
		<?php $this->load->view("admin/_partials/breadcrumb.php");?>
	</div>
	<!-- Form -->
	<?php $this->load->view("admin/_partials/input_form")?>
	<!-- Form udahan -->
	<!-- DataTables -->
	<?php $this->load->view("admin/_partials/input_tampil.php") ?>
	<!-- end datatables -->

</div>
<!-- /.container-fluid -->
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
</div>

<!-- Javascript <link> -->
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</body>

	</html>