

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  </head>
  <body>
    <div class="container px-0 py-3">
      <div class="row">
        <div class="col-7" styles="margin-right: 0rem;">
          <form method="GET" action="http://127.0.0.1:8000/">
            <h3>Data Pasien</h3>
            
            <div class="form-group row">
              <label for="name" class="col-4 col-form-label">Nama</label> 
              <div class="col-4">
                <input id="name" name="name" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
              <div class="col-4">
                <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir/usia</label> 
              <div class="col-4">
                <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
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
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-5">
          <?php
          // Ambil data yang diinputkan berdasarkan unique "name"
          // Gunakan fungsi isset untuk memeriksa apakah suatu variabel sudah diatur atau belum
          // Jika ada variabel yang bernilai NULL, maka fungsi isset akan mengembalikan nilai FALSE
          if (isset($_GET["submit"])) {
              $nama_pasien = $_GET['name'];
              $tanggal = $_GET['tgl_pemeriksaan'];
              $jk = $_GET['jk'];
              $lahir = $_GET['tgl_lahir'];
          ?>
            <div class="d-flex justify-content-center">
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th colspan="2"><h3>Hasil Data Pasien:</h3></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Nama:</td>
                          <td><?php echo $nama_pasien; ?></td>
                      </tr>
                      <tr>
                          <td>Tanggal Pemeriksaan:</td>
                          <td><?php echo $tanggal; ?></td>
                      </tr>
                      <tr>
                          <td>Tanggal Lahir:</td>
                          <td><?php echo $lahir; ?></td>
                      </tr>
                      <tr>
                          <td>Jenis Kelamin:</td>
                          <td><?php echo $jk; ?></td>
                      </tr>
                  </tbody>
              </table>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Jenis Tes</th>
                  <th>Hasil Pemeriksaan</th>
                  <th>Normal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tekanan Darah</td>
                  <td> </td>
                  <td>120/80 mmhg</td>
                </tr>
                <tr>
                  <td>Asan Urat</td>
                  <td> </td>
                  <td>Pria: < 7 mg/dl | Wanita: < 6 mg/dl </td>
                </tr>
                <tr>
                  <td>Kolesterol Total</td>
                  <td> </td>
                  <td> < 200 mg/dl</td>
                </tr>
                <tr>
                    <td rowspan="3">Gula Darah</td>
                    <td rowspan="3"> </td>
                    <td>Puasa: 70-110 mg/dl</td>
                </tr>
                <tr>
                  <td>2 jam setelah makan: 100-150 mg/dl</td>
                </tr>
                <tr>
                  <td>Sewaktu/acak: 70-125 mg/dl</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>