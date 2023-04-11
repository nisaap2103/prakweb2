<?php
class Pembelian{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPembelian(){
        $sql = "SELECT * FROM pembelian";
        // -- INNER JOIN jenis_produk j ON j.id = c.jenis_produk_id
        // -- ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}