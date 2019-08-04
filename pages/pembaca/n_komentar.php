<?php

//koneksi db
include '../connection.php';

//menerima input dari form input komentar
$idartikel = $_POST['inpidartikel'];
$nama = $_POST['inpnamakomentar'];
$email = $_POST['inpemailkomentar'];
$isi = $_POST['inpisikomentar'];

//query tambah komentar
$querykomentar = mysqli_query($mysqli, "INSERT INTO tb_komentar VALUES (DEFAULT, '$nama', '$isi', '$email')");

//memanggil data komentar terakhir
$lastkomentar = mysqli_query($mysqli, "SELECT id_komentar FROM tb_komentar ORDER BY id_komentar DESC LIMIT 1");

//mengambil value dari query last komentar
while ($data = mysqli_fetch_array($lastkomentar)) {
    $lastid = $data['id_komentar'];
}

//menambah data relasi
$queryrelasi = mysqli_query($mysqli, "INSERT INTO tb_detail VALUES (DEFAULT, '$idartikel', '$lastid')");

//redirect ke detail komentar
header("location: pm_detail.php?id=$idartikel");