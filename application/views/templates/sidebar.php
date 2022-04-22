<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0b486b;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa fa-globe-asia" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hope</div>
    </a>

    <!-- Divider -->
    <hr class=" sidebar-divider ">

    <!-- melakukan join query dari menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `menu`.`id`, `menu`
                    FROM `menu` JOIN `access_menu` 
                    ON `menu`.`id` = `access_menu`.`menu_id`
                    WHERE `access_menu`.`role_id` = $role_id
                    ORDER BY `access_menu`.`menu_id` ASC
                    ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class=" sidebar-heading">
            <?= $m['menu']; ?>
        </div>
        <!-- SUB MENU SESUAI MENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM `sub_menu`
                        WHERE `menu_id` = $menuId
                        AND `is_active` = 1
                        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();

        ?>

        <?php foreach ($subMenu as $sm) : ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title'] ?></span></a>
            </li>

        <?php endforeach; ?>
        <hr class="sidebar-divider mt-2">
    <?php endforeach; ?>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->