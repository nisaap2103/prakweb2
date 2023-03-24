<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">Form Regist Data Science</h3>
        <form method="POST" action="form_register.php">
  
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-user-circle"></i>
            </div>
          </div>
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-graduation-cap "></i>
          </div>
        </div>
        <select id="studi" name="studi" class="custom-select">
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Bisnis Digital">Bisnis Digital</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javasript"> 
        <label for="skill[]_2" class="custom-control-label">Javasript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill[]_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">JAVA</label>
      </div>
    </div>
  </div> 
  <!-- <div class="form-group row">
  <label for="email" class="col-4 col-form-label" id="basic-addon1">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> -->

<div class="from-group row">
<label for="email" class="col-4 col-form-label">Email</label> 
  <div class="input-group col-8">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-envelope"></i>
        </div>
      </div>
    <input id="email" name="email" type="text" class="form-control" placeholder="example@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </div>
</div> 
<br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
//ambil data yg diinputkan berdasarkan unique "name"
//gunakan fungsi isset untuk memeriksa apakah suatu variabel sudah diatur atau belum
//jika ada variabel yg bernilai NULL maka fungsi isset akan mengembalikan nilai FALSE
if (isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];

    $nilai = 0;
    foreach ($skill as $value){
        switch ($value){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javasript' :
                $nilai += 20;
                break;        
            case 'bootstrap' :
                $nilai += 20;
                break;        
            case 'php' :
                $nilai += 30;
                break;        
            case 'python' :
                $nilai += 30;
                break;        
            case 'java' :
                $nilai += 50;
                break;        
            default :
                $nilai += 0;
                break;        
        }
    }

    $skor = skor($nilai);
    $kategori = kategori_skill($nilai);
}

function kategori_skill($nilai) {
  if ($nilai >= 0 && $nilai < 40) {
    return "Kurang";
  } elseif ($nilai >= 40 && $nilai < 60) {
    return "Cukup";
  } elseif ($nilai >= 60 && $nilai < 100) {
    return "Baik";
  } elseif ($nilai >= 100 && $nilai <= 170) {
    return "Sangat Baik";
  } else {
    return "Tidak Memadai";
  }
}
?>

<?php
function skor($nilai){
    if ($nilai >= 0 && $nilai < 60){
        return 1;
    } elseif ($nilai >= 60 && $nilai < 100){
        return 2;
    } elseif ($nilai >= 100 && $nilai <= 170){
        return 3;
    }
}
?>

<?php
//cetak hasil inputan user
echo "<h4>Hasil Register : </h4>";
echo "<br>Nama : $nama";
echo "<br>NIM : $nim";
echo "<br>Jenis Kelamin : $jk";
echo "<br>Program Studi : $studi";
echo "<br>Skill Web : ";
foreach ($skill as $value){ 
    echo $value . ",";
}
echo "<br>Skor Skill : $skor";
echo "<br>Nilai total: $nilai";
echo "<br>Kategori Skill : $kategori";
echo "<br>Email : $email";
?>