<?php
include_once 'dbkoneksi.php';

include_once 'models/Produk.php';
include_once 'models/Kartu.php';
include_once 'models/Vendor.php';
include_once 'models/Pembelian.php';
include_once 'models/Pesanan.php';
include_once 'models/Jenis_produk.php';
include_once 'models/Pelanggan.php';



include_once('navbar.php');
include_once('sidebar.php');

// logic halaman
if(isset($_REQUEST['hal']))
// tangkap request menu di url (index.php?hal=(nama file atau halaman nya))
$hal = $_REQUEST['hal'];
// jika ada request dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}else{
    // jika tidak ada request dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'home.php';
}
include_once('footer.php');
?>




