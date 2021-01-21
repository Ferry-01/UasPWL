        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=" ">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin RM HotPlate</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <span>Home</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/data_barang'); ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/invoice'); ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoices</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->