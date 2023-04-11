<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
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
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>Minimal Stok</th>
                                <th>Jenis Produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $no = 1;
                    foreach ($data_produk as $row) {
                    ?>
                            <!-- code html untuk table data -->
                            <tr>
                                <td> <?= $no ?></td>
                                <td> <?=$row ['kode'] ?></td>
                                <td> <?=$row ['nama']  ?></td>
                                <td> <?=$row ['harga_beli']  ?></td>
                                <td> <?=$row ['harga_jual']  ?></td>
                                <td> <?=$row ['stok']  ?></td>
                                <td> <?=$row ['min_stok']  ?></td>
                                <td> <?=$row ['nama']  ?></td>
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