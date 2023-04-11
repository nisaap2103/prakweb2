<?php
$model = new Pembelian();
$data_pembelian = $model->dataPembelian();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pembelian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pembelian</li>
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
                                <th>Tanggal</th>
                                <th>Nomor</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Vendor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $no = 1;
                    foreach ($data_pembelian as $row) {
                    ?>
                            <!-- code html untuk table data -->
                            <tr>
                                <td> <?= $no ?></td>
                                <td> <?=$row ['tanggal'] ?></td>
                                <td> <?=$row ['nomor']  ?></td>
                                <td> <?=$row ['produk_id']  ?></td>
                                <td> <?=$row ['jumlah']  ?></td>
                                <td> <?=$row ['harga']  ?></td>
                                <td> <?=$row ['vendor_id']  ?></td>
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