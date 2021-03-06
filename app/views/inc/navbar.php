<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color: #fd7e14">
    <div class="container">
        <a href="<?php echo URL_ROOT; ?>/karyawan" class="navbar-brand">
            <img src="<?php echo URL_ROOT; ?>/cpanel/img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight"><?php echo SITE_NAME; ?> (Manager)</span>
        </a>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo URL_ROOT; ?>/pengguna/profile" class="nav-link btn btn-sm btn-primary text-white"> Profile <i class="fa fa-user-o"></i></a>
            </li>
            <!-- Logout -->
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo URL_ROOT; ?>/pengguna/logout" class="nav-link btn btn-sm btn-danger text-white"><?php echo $_SESSION['user_username']; ?>, Logout <i class="fa fa-sign-out"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->