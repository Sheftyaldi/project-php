<?php

$id = $_GET['id'];

require_once '../connect.php';

$query= mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");

if ($query) {
    echo "<script>alert('Data berhasil di hapus'); window.location.href = '../index.php';</script>";
} else {
    "echo <script>alert('Data gagal di hapus'); window.location.href = '../index.php';</script>";
}

?>