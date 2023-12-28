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
                <a class="nav-link" href="<?php echo base_url('/Admin'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelola User</h6>
                        <?php

                        if ($count[0]->total == 0) {
                        } else { ?>
                            <span class="badge badge-primary">
                                <?php echo $count[0]->total; ?>
                            </span>
                        <?php } ?>
                        <a class="collapse-item" href="/newuser">Pendaftar</a>
                        <p>
                            <?php if ($count[0]->total > 0) { ?>
                                <span class="badge-danger">
                                    <?php echo $count[0]->total; ?>
                                </span>
                            <?php } ?>
                        </p>
                        <i class="menu-arrow"></i>
                        </a>
                        <a class="collapse-item" href="/user">Kelola User</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Kelola Peminjam</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('/peminjaman') ?>">Peminjaman</a>
                        <a class="collapse-item" href="<?php echo base_url('/jadwal') ?>">Jadwal</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span class="menu-title">Laporan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-user"></i>
                    <span class="menu-title">Profile</span>
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