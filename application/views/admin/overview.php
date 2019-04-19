<!DOCTYPE html>
<html lang="en" style="z-index: 1">

<head>
    <?php $this->load->view("admin/_partials/head.php")?>
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


</body>
</html>