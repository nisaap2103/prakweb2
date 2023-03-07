<?php
//ambil data yang diinputkan oleh user
require_once 'fungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = $uts + $uas + $tugas / 3;
$keterangan = kelulusan($_nilai);
$grade = grade($_nilai);

//cetak data yang telah diambil kedalam browser
if(!empty($proses)){
    echo "Nama : $nama_siswa";
    echo "<br/>Mata Kuliah : $mata_kuliah";
    echo "<br/>UTS : $uts";
    echo "<br/>UAS : $uas";
    echo "<br/>Nilai Tugas Praktikum : $tugas";
    echo "<br/>Keterangan : $keterangan";
    echo "<br/>Grade : $grade";
    echo "<br/>Data Telah di : $proses";
    }
?>