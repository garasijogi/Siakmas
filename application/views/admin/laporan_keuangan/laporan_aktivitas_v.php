<!DOCTYPE html>
<html>
<head class="noprint">
	<?php $this->load->view("admin/_partials/head.php")?>
</head>
    <?php $this->load->view('admin/_partials/print.php')?>
<body>

    <!-- Navbar dan Sidebar -->
    <div class="noprint">
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
	<!-- <div style="margin-top: 75px;"> -->
        <div class="noprint">
            <a class="btn btn-custom text-white form-control" style="background-color:teal;font-weight: bold; margin-left: 15px; width: 70px;" href="javascript:window.print()">
                        Print</a>
        </div>
        <div class="laporan">
            <div id="section-to-print" style="background-color: white; height: 500px;">
                <h5 class="judul-laporan center"><?php 
                $query = $this->db->query('SELECT nama_masjid FROM profil');
                $query2 = $this->db->query('SELECT * FROM tr01_penerimaanterikat');

                foreach ($query->result() as $row)
                {
                    $nama=$row->nama_masjid;
                }
                foreach ($query2->result() as $row2)
                {
                    $tgl=$row2->id_infotr;
                }
                echo $nama;
                $tgl2 = substr($tgl, 0,10);
                $tgl3 = explode('-',$tgl2);
                $tgl4 = $tgl3[2].'/'.$tgl3[1].'/'.$tgl3[0];


                ?></h5>
                <h5 class="judul-laporan center">Laporan Aktivitas</h5>
                <h5 class="judul-laporan center">Per Tanggal <?php echo $tgl4;?></h5>

                <!-- div buat ngasih jarang dari judul -->
                <div class="row">
                    <div class="col-7"><br/></div>
                    <div class="col-5"><br/></div>
                </div>

                <!-- tes apakah data masuk ke dalam view -->
            <!-- div class="row">
                <div class="col-7"><?php print_r($data); ?></div>
                <div class="col-5"><br/></div>
            </div> -->

            <!-- Penerimaan Terikat -->
            <div class="row">
                <div class="col-9"><strong><em>Penerimaan Terikat</em></strong></div>
                <div class="col-3"></div>
            </div>
            <!-- peribadatan -->
            <div class="row">
                <div class="col-9 indent1"><strong>Peribadatan</strong></div>
                <div class="col-2"><?php echo($data['peribadatan']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Kotak Jumat</div>
                <div class="col-2"><?php echo($data['infaqKotakJumat']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq PHBI</div>
                <div class="col-2"><?php echo($data['infaqKotakJumat']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Pengajian</div>
                <div class="col-2"><?php echo($data['infaqPengajian']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Ramadhan</div>
                <div class="col-2"><?php echo($data['infaqRamadhan']);?></div>
            </div>
            <!-- Pendidikan -->
            <div class="row">
                <div class="col-9 indent1"><strong>Pendidikan</strong></div>
                <div class="col-2"><?php echo($data['infaqTpaTahfiz']);?></div>
            </div>
            <!-- Ziswaf -->
            <div class="row">
                <div class="col-9 indent1"><strong>Ziswaf</strong></div>
                <div class="col-2"><?php echo($data['ziswaf']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Fidyah</div>
                <div class="col-2"><?php echo($data['fidyah']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Baksos</div>
                <div class="col-2"><?php echo($data['infaqBaksos']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Dansos</div>
                <div class="col-2"><?php echo($data['infaqDansos']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Donatur</div>
                <div class="col-2"><?php echo($data['infaqDonatur']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Operasional</div>
                <div class="col-2"><?php echo($data['infaqOperasional']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Waqaf</div>
                <div class="col-2"><?php echo($data['waqaf']);?></div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Zakat</div>
                <div class="col-2"><?php echo($data['zakat']);?></div>
            </div>



            <div class="row">
                <div class="col-7"><br/></div>
                <div class="col-5"><br/></div>
            </div>



            <!-- <div class="row">
                <div class="col-7"><br/></div>
                <div class="col-5"><br/></div>
            </div>
            <div class="row">
                <div class="col-9">Penerimaan Terikat</div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-9 indent1">Peribadatan</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Kotak Jumat</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq PHBI</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Pengajian</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Ramadhan</div>
                <div class="col-2">500.000.0000</div>
            </div>


            <div class="row">
                <div class="col-7"><br/></div>
                <div class="col-5"><br/></div>
            </div>
            <div class="row">
                <div class="col-9">Penerimaan Terikat</div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-9 indent1">Peribadatan</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Kotak Jumat</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq PHBI</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Pengajian</div>
                <div class="col-2">500.000.0000</div>
            </div>
            <div class="row">
                <div class="col-9 indent2">Infaq Ramadhan</div>
                <div class="col-2">500.000.0000</div>
            </div> -->
        </div>
    </div>
</section>

</body>
</html>