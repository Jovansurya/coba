<?php
  include "db.php";

  $sql = "SELECT * from maba";

  $query = mysqli_query($connect, $sql);
  $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

  foreach ($results as $result) {
    $item[] = array(
      "jumlah" => $result["jumlah"],
      "tahun" => $result["tahun"]
    );
  }

  $response = array(
    "status" => 1,
    "message" => "Success Get Data From Database",
    "data" => $item
  );

  echo json_encode($response);
