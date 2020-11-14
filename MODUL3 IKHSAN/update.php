<!-- update -->
<?php

include 'conn.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$mulai = $_POST['mulai'];
$berakhir = $_POST['berakhir'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$benefit = implode(",", $_POST['benefit']);


mysqli_query($koneksi, "update event_table set nama='$nama', deskripsi='$deskripsi', kategori='$kategori', tanggal='$tanggal', mulai='$mulai', berakhir='$berakhir', tempat='$tempat', harga='$harga', benefit='$benefit' where id='$id'");

header("location:home.php");

?>
<!-- update -->