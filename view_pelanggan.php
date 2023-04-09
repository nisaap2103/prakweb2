<?php 
require_once 'dbkoneksi.php';
if(isset($_REQUEST['idview'])) {
    $_idview = $_GET['idview'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanggan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idview]);
    $row = $st->fetch();
    if(!$row) {
        $row = [];
    }
}else{
    // new data
    $row = [];
}

    //echo 'NAMA pelanggan ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?php echo isset($pelanggan['id']) ? $pelanggan['id'] : ''; ?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?php echo isset($pelanggan['kode']) ? $pelanggan['kode'] : ''; ?></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><?php echo isset($pelanggan['nama_pelanggan']) ? $pelanggan['nama_pelanggan'] : ''; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo isset($pelanggan['jenis_kelamin']) ? $pelanggan['jenis_kelamin'] : ''; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo isset($pelanggan['tempat_lahir']) ? $pelanggan['tempat_lahir'] : ''; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo isset($pelanggan['tanggal_lahir']) ? $pelanggan['tanggal_lahir'] : ''; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo isset($pelanggan['email']) ? $pelanggan['email'] : ''; ?></td>
        </tr>
        <tr>
            <td>Jenis Kartu</td>
            <td>
                <?php
                    if ($row['kartu_id'] == "1") {
                        echo "Gold Utama";
                    } elseif ($row['kartu_id'] == "2") {
                        echo "Platinum Jaya";
                    }elseif ($row['kartu_id'] == "3") {
                        echo "Silver";
                    } else {
                        echo "Non Member";
                    }
                    
                ?>
            </td>
        </tr>
    </tbody>
</table>