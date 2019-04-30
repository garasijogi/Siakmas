<!DOCTYPE html>
<html lang="en">

<head>
    <?php  $this->load->view("admin/_partials/head.php")?>
</head>
<body id="page-top">

<div>
    <?php  $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php")  ?>
        <div id="content-wrapper">
            <!-- Content Page -->
            <!-- form -------------------------------------------------------------------------------------------------------------------------------------------- -->
            <section class="container-fluid">
                <div class="row d-flex justify-content-around">
                    <!-- Kartu Peribadatan -->
                    <div class="kol3">
                        <div class="kartu">
                            <input type="checkbox">
                            <div class="togle"><span>+</span></div>
                            <div class="imgBox">
                                <img src="<?php echo base_url('assets/peribadatan.jpg') ?>" alt="hehehe">
                            </div>
                            <div class="kartu-submenu">
                                <div class="list-group">
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12610"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Jumat</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12620"><button type="button" class="list-group-item list-group-item-action">Infaq PHBI</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12630"><button type="button" class="list-group-item list-group-item-action">Infaq Pengajian</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12640"><button type="button" class="list-group-item list-group-item-action">Infaq Ramadhan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kartu Peribadatan -->
                    <div class="kol3">
                        <div class="kartu">
                            <div class="imgBox">
                                <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12700"><img src="<?php echo base_url('assets/pendidikan.jpg') ?>" alt="hehehe"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kartu ZISWAF -->
                    <div class="kol3">
                        <div class="kartu">
                            <input type="checkbox">
                            <div class="togle"><span>+</span></div>
                            <div class="imgBox">
                                <img src="<?php echo base_url('assets/ziswaf.jpg') ?>" alt="hehehe">
                            </div>
                            <div class="kartu-submenu">
                                <div class="list-group">
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12810"><button type="button" class="list-group-item list-group-item-action">Infaq dari Donatur</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12820"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Dana Operasional</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12830"><button type="button" class="list-group-item list-group-item-action">Infaq Kotak Dana Sosial</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12840"><button type="button" class="list-group-item list-group-item-action">Zakat Fitrah</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12850"><button type="button" class="list-group-item list-group-item-action">Fidyah</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12860"><button type="button" class="list-group-item list-group-item-action">Infaq untuk Baksos</button></a>
                                    <a href="<?php echo base_url();?>admin/penerimaan_terikat/input?kode=12870"><button type="button" class="list-group-item list-group-item-action">Waqaf</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /form----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- content wrapper -->
        </div>
    <!-- wrapper -->
    </div>
</div>

<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>