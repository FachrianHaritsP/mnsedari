<?php require APP_ROOT . '/views/inc/header.php' ?>
<?php require APP_ROOT . '/views/inc/leftsider.php' ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Karyawan <small></small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item">Karyawan</li>
                    <li class="breadcrumb-item active">Tambah Karyawan</li>
                </ol>
            </div>
		</div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <?php if (@$data['karyawan']) : ?>
        <form role="form" action="<?php echo URL_ROOT; ?>/karyawan/update/<?php echo $data['karyawan']->nip; ?>" enctype="multipart/form-data" method="POST">
        <?php else : ?>
        <form role="form" action="<?php echo URL_ROOT; ?>/karyawan/store" enctype="multipart/form-data" method="POST">
        <?php endif ?>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Karyawan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
									<div class="form-group">
										<label for="id">NIP</label>
                                        <input id="nip" type="text" class="form-control" name="nip" value="<?php echo (@$data['karyawan']) ? $data['karyawan']->nip : '' ?>" <?php echo (@$data['karyawan']) ? 'readonly' : '' ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
										<input id="nama" type="text" class="form-control" name="nama" value="<?php echo @$data['karyawan']->nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
										<textarea class="form-control" name="alamat"><?php echo @$data['karyawan']->alamat; ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="kontak">Kontak</label>
										<input type="text" class="form-control" name="kontak" value="<?php echo @$data['karyawan']->kontak; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="jabatan">Jabatan</label>
										<input type="text" class="form-control" name="jabatan" value="<?php echo @$data['karyawan']->jabatan; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo @$data['karyawan']->username; ?>">
									</div>
									<div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php if (@$data['karyawan']) : ?>
                            <button type="submit" class="btn btn-warning">Ubah</button>
                            <?php else : ?>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <?php endif ?>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->

<?php require APP_ROOT . '/views/inc/footer.php' ?>