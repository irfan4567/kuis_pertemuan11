<?php
include "koneksi.php";
// Mendapatkan data dari form
$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$no_hp   = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat  = $_POST['alamat'];

// Query tambah data mahasiswa
$sql = "INSERT INTO mahasiswa (nim, nama, no_hp, jenis_kelamin, jurusan, alamat) VALUES ('$nim', '$nama', '$no_hp', '$jenis_kelamin', '$jurusan', '$alamat')";
if (mysqli_query($link, $sql)) {
    header('Location:tampil_data.php');
} else {
    header('Location:form_tambah.php');
}
?>


### Delete.php
php
<?php
// Koneksi ke database
include "koneksi.php";
// Mendapatkan ID mahasiswa yang akan dihapus
$id = $_GET['id'];

// Query hapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($link, $sql)) {
    header('Location:tampil_data.php');
}
?>