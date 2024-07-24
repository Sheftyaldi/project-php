<?php

$id          = $_POST['id'];
$nama        = $_POST['nama'];
$nim         = $_POST['nim'];
$jurusan     = $_POST['jurusan'];

require_once '../connect.php';

$query = mysqli_query($connect, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id");

if ($query) {
    echo "<script>alert('Data berhasil di edit'); window.location.href = '../index.php';</script>";
} else {
    echo "<script>alert('Data gagal di edit'); window.location.href = '../index.php';</script>";
}

?>