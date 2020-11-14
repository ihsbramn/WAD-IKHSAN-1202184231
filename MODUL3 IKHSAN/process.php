<!-- process -->
<?php
include 'conn.php';
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$mulai = $_POST['mulai'];
$berakhir = $_POST['berakhir'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$benefit = implode(",", $_POST['benefit']);

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:home.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO event_table VALUES(NULL,'$nama','$deskripsi','$xx','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");
        header("location:home.php?alert=berhasil");
    } else {
        header("location:home.php?alert=gagak_ukuran");
    }
}
?>
<!-- process -->