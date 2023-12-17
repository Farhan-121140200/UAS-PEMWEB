<!--Farhan Rizky Gunawan-->
<!--121140200-->
<!--Pemrograman web RB-->
<?php
session_start();

// Menyimpan informasi pengguna ke dalam session
$_SESSION["username"] = "john_doe";
$_SESSION["email"] = "john_doe@example.com";

// Mengambil informasi pengguna dari session
$username = $_SESSION["username"];
$email = $_SESSION["email"];
?>
