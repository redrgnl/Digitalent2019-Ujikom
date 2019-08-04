<?php 

//koneksi db
include '../connection.php';

//tanggal hari ini
$today = date("Y-m-d");

//menerima input post artikel baru
$judul = $_POST['inpjdlartikel'];
$isi = $_POST['inpisiartikel'];
$penulis = $_POST['inpidpenulis'];

//query tambah artikel baru
$queryartikel = mysqli_query($mysqli, "INSERT INTO tb_artikel VALUES (DEFAULT, '$judul', '$isi', '$penulis', '$today')");

//redirect ke dashboard penulis
header("location: pn_dashboard.php");

//EOF