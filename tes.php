<?php
require 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users");
$mhs = query("SELECT * FROM users")

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
  <h1>daftar users</h1>
  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No</th>
      <th>Id_mhs</th>
      <th>Nama</th>
      <th>umur</th>
      <th>jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mhs as $row) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["id_user"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["umur"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>

      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>

</html>