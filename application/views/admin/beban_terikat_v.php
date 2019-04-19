<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("admin/_partials/head.php")?>
</head>
<body>

<!-- Sidebar dan Navbar -->
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


<section class="container-fluid">
    <div class="row d-flex justify-content-around">
        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Insentif Penceramah</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Insentif Marbot</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Beban PHBI</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Buletin Dakwah</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Peribadatan Lainnya</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Sholat Tarawih</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Konsumsi Ifthar & Sahur</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Malam Nuzulul Qur'an</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Zakat Fitrah dan Fidyah</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Penyaluran Beasiswa</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Penyaluran Untuk Besuk</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Penyaluran Aktivitas Kepemudaan</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Sumbangan Anak Yatim</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Sumbangan Ta'ziyah</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Sumbangan Bencana Alam</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Penyaluran TPA & Hafidz</button></a>
                        <a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Pelatihan</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>