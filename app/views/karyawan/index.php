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

<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karyawan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Karyawan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <a href="<?php echo URL_ROOT; ?>/karyawan/create" class="btn btn-primary btn-xs"><span class="fa fa-plus"></span> Tambah Karyawan</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row float-right">
                                            <label for="filter">
                                                <select id="table-data-filter-column" class="form-control form-control-sm">
                                                    <option>Tanggal</option>
                                                    <option>Sub Total</option>
                                                    <option>Kupon</option>
                                                    <option>Total Harga</option>
                                                    <option>Kasir</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table id="table-data" class="table table-bordered table-striped text-center table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Jabatan</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data['karyawan_list'] as $karyawan) : ?>
                                    <?php if ($karyawan->nip != $_SESSION['user_nip']) : ?>
                                    <tr>
                                        <td><?php echo $karyawan->nip; ?></td>
                                        <td><?php echo $karyawan->nama; ?></td>
                                        <td><?php echo $karyawan->alamat; ?></td>
                                        <td><?php echo $karyawan->kontak; ?></td>
                                        <td><?php echo $karyawan->jabatan; ?></td>
                                        <td><?php echo $karyawan->username; ?></td>
                                        <td>
                                            <a href="<?php echo URL_ROOT; ?>/karyawan/show/<?php echo $karyawan->nip; ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Tampil</a> | 
                                            <a href="<?php echo URL_ROOT; ?>/karyawan/edit/<?php echo $karyawan->nip; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Ubah</a> | 
                                            <a href="<?php echo URL_ROOT; ?>/karyawan/destroy/<?php echo $karyawan->nip; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<?php require APP_ROOT . '/views/inc/footer.php' ?>