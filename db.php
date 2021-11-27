<?php
<<<<<<< HEAD
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$DBname = "mahasiswa";

$connect = mysqli_connect($servername, $usernameDB, $passwordDB, $DBname);
if (!$connect) {
    exit("Database has not been connected");
=======
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ereview";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
>>>>>>> 09bdf35934404a20c2b0b53f6f238a7abc2fe6af
}
