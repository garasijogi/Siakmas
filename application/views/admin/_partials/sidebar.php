<!-- Sidebar -->
<nav id="sidebar" style="z-index: 6" class="navbar-fixed">
    
    <ul class="list-unstyled components">
        <a class="navbar-brand mr-1 text-white" id="siteName" href="<?php echo site_url('admin') ?>" style="margin-left: 51px;margin-top: 8px;margin-bottom: 8px;font-weight: bold;"><?php echo SITE_NAME ?></a>
        <li>
            <a href="<?php echo base_url();?>admin/beranda"><i class="fas fa-home "></i><span>Home</span></a>
        </li>
        <li>
            <a href="#penerimaanSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-line "></i><span>Penerimaan</span></a>
            <ul class="collapse list-unstyled" id="penerimaanSubmenu">
                <li>
                    <a href="<?php echo base_url();?>admin/penerimaan_terikat">Penerimaan Terikat</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin/penerimaan_tidak_terikat">Penerimaan Tidak Terikat</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pengeluaranSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-sort-amount-up "></i><span>Pengeluaran</span></a>
            <ul class="collapse list-unstyled" id="pengeluaranSubmenu">
                <li>
                    <a href="<?php echo base_url();?>admin/pembelian">Pembelian</a>
                </li>
                <li>
                    <a href="#bebanSubsubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">Beban-beban</a>
                    <ul class="collapse list-unstyled" id="bebanSubsubmenu">
                        <li>
                            <a href="<?php echo base_url();?>admin/beban_terikat">Beban Terikat</a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/beban_tidak_terikat">Beban Tidak Terikat</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin/renovasi_dan_pembangunan">Renovasi dan Pembangunan</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#penyesuaianSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-copy "></i><span>Penyesuaian</span></a>
            <ul class="collapse list-unstyled" id="penyesuaianSubmenu">
                <li>
                    <a href="<?php echo base_url();?>admin/penyesuaian_perlengkapan">Penyesuaian Perlengkapan</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin/penyesuaian_renovasi_dan_pembangunan">Renovasi dan Pembangunan</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#laporanSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-copy "></i><span>Laporan</span></a>
            <ul class="collapse list-unstyled" id="laporanSubmenu">
                <li>
                    <a href="<?php echo base_url();?>admin/laporan_keuangan">Laporan Keuangan</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin/buku_besar_utama">Buku Besar Utama</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>