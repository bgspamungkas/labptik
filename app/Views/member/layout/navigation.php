    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">

                <img src="<?php echo base_url('asset-admin/img/ptik.png') ?>" alt="logo" width="200px" />

                <div class="sidebar-brand-text mx-3" text=".text-gray-900">
                    <h10 class="welcome-text">Selamat Datang <?= $nama ?>
                        <a></a>
                    </h10>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('/Peminjam'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/jadwalpeminjaman'); ?>">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span class="menu-title">Jadwal</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/profilpeminjam'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/keluar'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->