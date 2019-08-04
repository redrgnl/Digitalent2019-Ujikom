<?php

//koneksi database
include '../connection.php';

//mengambil id dari link
$idartikel = $_GET['id'];

//query delete
$querydelete = mysqli_query($mysqli, "DELETE FROM tb_artikel WHERE id_artikel = '$idartikel'");

//redirect ke halaman daftar artikel
header("location: pn_daftar.php");