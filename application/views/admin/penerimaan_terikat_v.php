<!DOCTYPE html>
<html lang="en">

<head>
    <?php  $this->load->view("admin/_partials/head.php")?>
</head>
<body>
    
    <!-- Navbar dan Sidebar -->
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
    
<!-- Content Page -->
<section class="container-fluid">
    <div class="row d-flex justify-content-around">
        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url('assets/peribadatan.jpg') ?>" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1211"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Jumat</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1212"><button type="button" class="list-group-item list-group-item-action">Infaq PHBI</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1213"><button type="button" class="list-group-item list-group-item-action">Infaq Pengajian</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1214"><button type="button" class="list-group-item list-group-item-action">Infaq Ramadhan</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kol3">
            <div class="kartu">
                <div class="imgBox">
                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1221"><img src="<?php echo base_url('assets/pendidikan.jpg') ?>" alt="hehehe"></a>
                </div>
            </div>
        </div>

        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="togle"><span>+</span></div>
                <div class="imgBox">
                    <img src="<?php echo base_url('assets/ziswaf.jpg') ?>" alt="hehehe">
                </div>
                <div class="kartu-submenu">
                    <div class="list-group">
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1231"><button type="button" class="list-group-item list-group-item-action">Infaq dari Donatur</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1232"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Dana Operasional</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1233"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Dana Sosial</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1234"><button type="button" class="list-group-item list-group-item-action">Zakat Fitrah</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1235"><button type="button" class="list-group-item list-group-item-action">Fidyah</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1236"><button type="button" class="list-group-item list-group-item-action">Infaq untuk Baksos</button></a>
                        <a href="<?php echo base_url();?>admin/penerimaan_terikat/input1237"><button type="button" class="list-group-item list-group-item-action">Waqaf</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>