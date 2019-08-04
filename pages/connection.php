<?php

//format login db
$localhost = "localhost";
$username = "root";
$password = "";
$database = "db_blog";

//variable login db
$mysqli = mysqli_connect($localhost, $username, $password, $database);

//kondisi jika koneksi gagal
if (!$mysqli) {
    die("Connection Failed". mysqli_connect_error());
}

//EOF