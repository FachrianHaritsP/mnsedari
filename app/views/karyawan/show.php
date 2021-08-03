<?php require APP_ROOT . '/views/inc/header.php' ?>
<?php require APP_ROOT . '/views/inc/leftsider.php' ?>

<?php if(@$_SESSION['success']) : ?>
    <div class="alert alert-success">
        <div class="container">
            <?php echo $_SESSION['success'] ?>
        </div>
    </div>
    <?php unset($_SESSION['success']) ?>
<?php endif ?>
<?php if(@$_SESSION['error']) : ?>
    <div class="alert alert-danger">
        <div class="container">
            <?php echo $_SESSION['error'] ?>
        </div>
    </div>
    <?php unset($_SESSION['error']) ?>
<?php endif ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tampil Karyawan <small></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo URL_ROOT; ?>/karyawan">Karyawan</a></li>
                    <li class="breadcrumb-item active">Tampil Karyawan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Informasi Karyawan</b></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>NIP</td>
                                        <td><?php echo $data['karyawan']->nip ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td><?php echo $data['karyawan']->nama ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?php echo $data['karyawan']->alamat ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kontak</td>
                                        <td><?php echo $data['karyawan']->kontak ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td><?php echo $data['karyawan']->jabatan ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $data['karyawan']->username ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
</section>

<?php require APP_ROOT . '/views/inc/footer.php' ?>