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
<?php 
$query = $this->db->query('SELECT * FROM profil');

                    foreach ($query->result() as $row)
                    {
                        $nama_masjid=$row->nama_masjid;
                        $alamat=$row->alamat;
                        $notelp=$row->no_telepon;
                        $norek=$row->no_rekening;
                        $thn=$row->tahun_berdiri;
                    }
                    
?>
<div id="formInputTransaksi" style="margin-left: 80px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <form method="post" action="<?=base_url().'admin/profil/update'?>">
                        <div class="form-group row">
                            <label for="ep" class="col-sm-3 col-form-label">Edit Profil: </label>
                        </div>
                        <div class="form-group row">
                            <label for="nama_masjid" class="col-sm-3 col-form-label">Nama Masjid : </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nama_masjid" name="nama_masjid" value="<?php echo $nama_masjid;?>" placeholder="Masukkan Nama Masjid">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat : </label>
                            <div class="col-sm-5">
                                <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>" placeholder="Masukkan Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notelp" class="col-sm-3 col-form-label">No. Telepon : </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="notelp" value="<?php echo $notelp;?>" name="notelp" placeholder="Masukkan No. Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="norek" class="col-sm-3 col-form-label">No. Rekening : </label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="norek" value="<?php echo $norek;?>" name="norek" placeholder="Masukkan No. Rekening">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thn" class="col-sm-3 col-form-label">Tahun Berdiri : </label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" value="<?php echo $thn;?>" id="thn" name="thn" placeholder="Masukkan Tahun Beridiri">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-sm-5">
                                <button type="submit" name="submit" class="btn btn-primary sm-2">Simpan</button>
                            </div>
                        </div>
                        
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>