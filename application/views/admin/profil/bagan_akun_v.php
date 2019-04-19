<!DOCTYPE html>
<html style="overflow-x: hidden">

<head>
	<?php  $this->load->view("admin/_partials/head.php")?>
</head>

<body>

<div>
    <?php  $this->load->view("admin/_partials/navbar.php") ?>
    <div class="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php")  ?>
            
        <!-- 
            karena ini halaman overview (home), kita matikan partial breadcrumb.
            Jika anda ingin mengampilkan breadcrumb di halaman overview,
            silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
        <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </div>
</div>

<div style="margin-top: 70px;margin-left: 60px;margin-bottom: -50px;">
    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
</div>

<section class="container-fluid ">
    <h4 style="text-align: center">Bagan Akun</h4>
    <div style="overflow-y: scroll; height: 450px;">
        <div class="table-responsive">

            <table class="table table-hover table-fixed" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Akun</th>
                        <th>Nama Akun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akun as $akuns){ ?>
                        <tr>
                            <td>
                                <?php echo $akuns['kode_akun'];?>
                            </td>
                            <td>
                                <?php echo $akuns['nama_akun'];?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>

