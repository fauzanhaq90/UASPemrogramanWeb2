<?php
include '../layout/header.php';
include '../layout/sidebar.php';
if (is_null(@$_GET['id'])) {
    echo "<script>alert('Sorry, Your Data ID is Empty');
   window.location = '../page/view-data';</script>";
} else {
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Data</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Data</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Input Data Bantuan Sosial Covid19</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <?php
                    $parameter = base64_decode("$_GET[id]");
                    $id = str_replace("$salt", "", "$parameter");
                    $query = mysqli_query($koneksi, "select * from data where id='$id'");
                    while ($data = mysqli_fetch_array($query)) {
                        $id = $data['id'];
                        $alokasi = $data['alokasi'];
                        $dana = $data['dana'];
                        $nama = $data['nama'];
                        $hp = $data['hp'];
                        $email = $data['email'];
                    }
                    ?>
                    <form action="../data-processing/change-data" method="post">
                        <div class="card-body">
                            <label>Jenis Alokasi</label>
                            <select name="alokasi" class="form-control select2" style="width: 100%;">
                                <option selected="selected"><?php echo $alokasi; ?></option>
                                <option>Alat Pelindung Diri</option>
                                <option>Logistics Mahasiswa</option>
                                <option>Bantuan Kuota Mahasiswa</option>
                                <option>Hand Sanitizer</option>
                                <option>Sembako Masyarakat</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jumlah Dana</label>
                                <input type="number" name="dana" value='<?php echo $dana; ?>' class="form-control" placeholder="1.000.000">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" value='<?php echo $nama; ?>' class="form-control" placeholder="Valentino Rossi">
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="number" name="hp" value='<?php echo $hp; ?>' class="form-control" placeholder="85869752980">
                                </div>

                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="email" name="email" value='<?php echo $email; ?>' class="form-control" placeholder="fajarjul58@outlook.com">
                                <input type="hidden" name="id_data" value='<?php echo $id; ?>'>
                                <input type="hidden" name="parameter" value='2'>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                <?php
                include '../layout/footer.php';
            }
