<div>
    <nav id="navbarTop" class="navbar navbar-expand navbar-dark static-top navbar-size navbar-fixed" style="z-index: 5;background-color: teal">

        <a class="navbar-brand mr-1 text-white" id="siteName" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>
        
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    $query = $this->db->query('SELECT nama_masjid FROM profil');

                    foreach ($query->result() as $row)
                    {
                        $nama=$row->nama_masjid;
                    }
                    echo $nama;


                    ?>
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
            </li>
            
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog fa-spin fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>admin/profil/edit_profil">Edit Profil</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>admin/profil/bagan_akun">Bagan Akun</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</div>