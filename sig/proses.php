<!--Ambil data dari database-->
<?php
include "koneksi.php";

$mysqli = $conn->query("SELECT * FROM tabel_mhs ORDER BY nama ASC");
while($row = $mysqli->fetch_assoc()){
    $id = $row["id"];
    $nama = $row["nama"];
    $tempat_tanggal_lahir = $row["tempat_tanggal_lahir"];
    $alamat = $row["alamat"];
    $telepon = $row["telepon"];
    $email = $row["email"];
    $pendidikan = $row["pendidikan"];
    $lat = $row["lat"];
    $lng = $row["lng"];
    echo "addMarker($lat, $lng, '$nama');\n";
}
?>