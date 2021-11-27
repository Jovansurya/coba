<?php
include "db.php";

$smhs = "SELECT * from users";

$qmhs = mysqli_query($connect, $smhs);
$resmhs = mysqli_fetch_all($qmhs, MYSQLI_ASSOC);

foreach ($resmhs as $hasil) {
    $user[] = array(
        "id_user" => $hasil["id_mhs"],
        "nama" => $hasil["nama"],
        "umur" => $hasil["umur"],
        "jurusan" => $hasil["jurusan"]
    );
}

$response = array(
    "status" => 1,
    "message" => "Success Get Data From Database",
    "data" => array(
        "users" => $user
    )
);

echo json_encode($response);
