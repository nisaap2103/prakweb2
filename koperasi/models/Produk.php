<?php
class Produk{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataProduk(){
        $sql = "SELECT c.*, j.nama AS nama
        FROM produk c 
        INNER JOIN jenis_produk j ON j.id = c.jenis_produk_id
        ORDER BY c.id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function tampilProduk(){
        // select semua kolom yang ada di dalam table produk
        $sql = "SELECT P.*, j.nama AS jenis FROM produk p
        INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
        ORDER BY p.id DESC";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah di siapkan menggunakan method prepare
        // menggunakan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array
        // menggunakan method fetchall
        $data = $ps->fetchAll();
        // kembalikan data produk dalam bentuk data array yang sudah
        // disimpan ke dalam variable $data;
        return $data;

    }

    public function ambilProduk($id){
        // select semua kolom yang ada di dalam table produk
        $sql = "SELECT P.*, j.nama AS jenis FROM produk p
        INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
        ORDER BY p.id DESC";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah di siapkan menggunakan method prepare
        // menggunakan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array
        // menggunakan method fetchall
        $data = $ps->fetchAll();
        // kembalikan data produk dalam bentuk data array yang sudah
        // disimpan ke dalam variable $data;
        return $data;
    }
//simpan data
    public function simpan($data){
        $sql ="INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id)
        VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    //edit atau ubah
    public function ubah($data){
        "UPDATE produk SET
        kode=?,nama=?,harga_beli=?,harga_jual=?,stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    //buat fungsi hapus data
    public function hapus($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}