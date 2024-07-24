<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

require_once '../connect.php';

$query = mysqli_query($connect, "INSERT INTO mahasiswa VALUE ('', '$nama', '$nim', '$jurusan')");

if($query) {
    echo "<script>alert('Data Berhasil di Input');window.location.href = '../index.php'</script>";
} else {
    echo "<script>alert('Data Gagal di Input');window.location.href = '../index.php'</script>";
}
?>