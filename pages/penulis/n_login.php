<?php

//memulai session
session_start();

//koneksi database
include '../connection.php';

//menerima input post form login
$username = $_POST['pnusername'];
$password = $_POST['pnpassword'];

//query login | check data login
$querylogin = mysqli_query($mysqli, "SELECT * FROM tb_penulis WHERE username = '$username' AND password = '$password'");
$checklogin = mysqli_num_rows($querylogin);

//mengambil data berdasarkan username
while ($data = mysqli_fetch_array($querylogin)) {
    $idpenulis = $data['id_penulis'];
}

//kondisi login
if ($checklogin == 1) {
    $_SESSION['status'] = "login";
    $_SESSION['idpenulis'] = $idpenulis;
    $_SESSION['penulis'] = $username;
    header("location: pn_dashboard.php");
} else {
    header("location: pn_login.html");
}

//EOF