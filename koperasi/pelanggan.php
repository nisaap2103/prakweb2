<?php
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pelanggan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Jenis Kartu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $no = 1;
                    foreach ($data_pelanggan as $row) {
                    ?>
                            <!-- code html untuk table data -->
                            <tr>
                                <td> <?= $no ?></td>
                                <td> <?=$row ['kode'] ?></td>
                                <td> <?=$row ['nama']  ?></td>
                                <td> <?=$row ['jk']  ?></td>
                                <td> <?=$row ['tmp_lahir']  ?></td>
                                <td> <?=$row ['tgl_lahir']  ?></td>
                                <td> <?=$row ['email']  ?></td>
                                <td> <?=$row ['kartu_id']  ?></td>
                            </tr>
                            <?php
                    $no++;
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>