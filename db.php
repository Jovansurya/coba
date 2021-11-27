<?php
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$DBname = "mahasiswa";

$connect = mysqli_connect($servername, $usernameDB, $passwordDB, $DBname);
if (!$connect) {
    exit("Database has not been connected");
}
