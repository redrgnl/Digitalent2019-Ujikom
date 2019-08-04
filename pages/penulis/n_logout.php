<?php

//memulai session
session_start();

//menghapus semua session
session_destroy();

//redirect ke login penulis
header("location: pn_login.html");

//EOF