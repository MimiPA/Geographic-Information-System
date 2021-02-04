<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head> 
<body>

<?php
include "koneksi.php";

date_default_timezone_set('Asia/Makassar');
$tanggal = date("Y-m-d H:i:sa");

$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$pendidikan = $_POST['pendidikan'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$mysqli = "INSERT INTO tabel_mhs (nama, tempat_tanggal_lahir, alamat, telepon, email, pendidikan, lat, lng) VALUES ('$nama', '$ttl', '$alamat', '$telepon', '$email', '$pendidikan', '$lat', '$lng')";
$result = mysqli_query($conn, $mysqli);

if ($result) {
  echo "<script>alert('Inputan Berhasil pada tanggal $tanggal. Terima Kasih')</script>";
  echo "<script>window.location.href='home.php';</script>";
}
else {
  echo "Input gagal";
}

  mysqli_close($conn);

?>

<script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body> 
</html>