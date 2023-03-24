<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja Online</title>
</head>
<body style="margin: 20pt">
    <h1>Form Belanja Online</h1>
    <div class="row">
        <div class="col-md-8">
            <form method="post">
                <div class="row mb-3">
                    <label for="customer" style="font-weight: bold;"class="col-2 form-label">Customer</label>
                    <div class="col-sm-10">
                        <input type="text" name="customer" id="customer" required placeholder="Nama Customer" class="form-control"><br>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="produk" style="font-weight: bold;" class="col-2 form-label">Pilih Produk</label>
                    <div class="col-sm-10">
                        <div name="produk" id="produk" required>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah" style="font-weight: bold;" class="col-2 form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" id="jumlah" min="1" required placeholder="Jumlah" class="form-control"><br>
                    </div>
                </div>
                
                <input type="submit" name="submit" value="Kirim" class="btn btn-success">
            </form>
        </div>
        <div class="col-md-4">
            <table class="table table-primary table-striped table-bordered">
                <tr class="bg-primary" style="color: white;">
                  <th class="bg-primary">Daftar Barang</th>
                  <th>Daftar Harga</th>
                </tr>
                <tr>
                  <td>TV </td>
                  <td> Rp 4.200.000</td>
                  
                </tr>
                <tr>
                  <td>Kulkas </td>
                  <td> Rp 3.100.000</td>
                 
                </tr>
                <tr>
                  <td>Mesin Cuci</td>
                  <td> Rp 3.800.000</td>
                  
                </tr>
                    <th colspan="2" class="bg-primary" style="color: white;">Harga Dapat Berubah Setiap Saat</th>
                <tr>
        
                </tr>
              </table>
        </div>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == "tv"){
            $harga = 4200000;
        }
        elseif($produk == "kulkas"){
            $harga = 3100000;
        }
        else{
            $harga = 3800000;
        }

        $total = $harga * $jumlah;

        echo "<h2>Hasil Belanja</h2>";
        echo "<p>Nama Customer: $customer</p>";
        echo "<p>Produk Pilihan: $produk</p>";
        echo "<p>Jual Beli: $jumlah</p>";
        echo "<p>Total Harga: Rp ".number_format($total, 0, ',', '.')."</p>";
    }
    ?>
</body>
</html>
