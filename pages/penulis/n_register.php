<?php

//koneksi database
include '../connection.php';

//menerima input post form register
$username = $_POST['pnusername'];
$password = $_POST['pnpassword'];

//cek data sudah ada
$check = mysqli_query($mysqli, "SELECT * FROM tb_penulis WHERE username = '$username'");
$checkusername = mysqli_num_rows($check);

//kondisi jika username sama
if ($checkusername == 0) {
    $query = mysqli_query($mysqli, "INSERT INTO tb_penulis VALUES (DEFAULT, '$username', '$password')");
    header("location: pn_login.html");
} else {
    header("location: pn_register.html");
}

//EOF