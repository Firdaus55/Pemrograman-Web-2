<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
    
<form method="GET" action="Praktikum2-3.php">
    <div class="container">
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input name="nama" type="text" value="" class="form-control" size="30">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="UTS" name="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="UAS" name="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktik" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <input id="praktik" name="praktik" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
    </div>
  </div>
  </div>
</form>
<?php
$simpan = $_GET['simpan'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['UTS'];
$nilai_uas = $_GET['UAS'];
$nilai_tugas = $_GET['praktik'];

echo 'Proses : '.$simpan;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>
</body>
</html>