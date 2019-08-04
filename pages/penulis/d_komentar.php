<?php

//koneksi db
include '../connection.php';

$idkom = $_GET['id'];

//query delete komentar
$querydelete = mysqli_query($mysqli, "DELETE FROM tb_detail WHERE id_komentar = '$idkom'");

//redirect ke daftar artikel
header("location: pn_daftar.php");