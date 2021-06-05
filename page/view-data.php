<?php

include '../layout/header.php';
include '../layout/sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <h3 class="card-title">
                                    View All Data
                                </h3>
                            </center>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Alokasi</th>
                                        <th>Jumlah Dana</th>
                                        <th>Nama Lengkap</th>
                                        <th>No HP</th>
                                        <th>E-Mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "select * from data");
                                    while ($data = mysqli_fetch_array($query)) {
                                        $parameter = $data['id'];
                                        $x = $salt . $parameter;
                                        $id = base64_encode($x);
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['alokasi']; ?></td>
                                            <td><?php echo rupiah($data['dana']); ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td>+62<?php echo $data['hp']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><a class="btn btn-danger" href="../data-processing/change-data?id=<?php echo $id; ?>&parameter=1"><span class="fa fa-trash"></span> Delete</a> <a class="btn btn-warning" href="edit-data?id=<?php echo $id; ?>"><span class="fa fa-pencil" aria-hidden="true"></span>Edit</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <?php
                    include '../layout/footer.php';
