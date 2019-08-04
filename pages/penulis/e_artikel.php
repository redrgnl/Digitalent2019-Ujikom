<?php

//koneksi database
include '../connection.php';

//memulai session
session_start();

//menerima input post form edit artikel
$idartikel = $_POST['inpidartikel'];
$penulis = $_POST['inpidpenulis'];
$judul = $_POST['inpjdlartikel'];
$isi = $_POST['inpisiartikel'];

//kondisi cek id penulis | query update artikel
if ($penulis == $_SESSION['idpenulis']) {
    $query = mysqli_query($mysqli, "UPDATE tb_artikel SET judul_artikel = '$judul', isi_artikel = '$isi' WHERE id_artikel = '$idartikel'");
    header("location: pn_daftar.php");
} else {
    header("location: pn_edit.php?id=$idartikel");
}

//EOF