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
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$judul = $_POST['judul'];
$pesan = $_POST['pesan'];

$mysqli = "INSERT INTO tabel_pesan (nama, email, telepon, judul, pesan) VALUES ('$nama', '$email', '$telepon', '$judul', '$pesan')";
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