<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

//step 1 tangkap inputan user dari form
$_kode = $_POST['kode']; //1
$_nama = $_POST['nama']; //2
$_harga_beli = $_POST['harga_beli']; //3
$_stok = $_POST['stok']; //4
$_min_stok = $_POST['min_stok']; //5
$_jenis = $_POST['jenis_produk_id']; //6

//step 2 simpan data yang ditangakap kedalam array
$data = [
$_kode, //1
$_nama, //2
$_harga_beli, //3 
$_harga_jual = 1.2 * $_harga_beli, //4 
$_stok, //5
$_min_stok, //6 
$_jenis, //7
];
// step 3 eksekusi data array melalui tombol tambah, ubah, hapus
$model = new  Produk ();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan';
    $model->simpan($data);
    break;

    default;
header('Location:index.php?hal=produk');
}
//step 4 arahkan ke hal produk
header('Location:index.php?hal=produk'); 
?>