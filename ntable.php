<<<<<<< HEAD
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
        <td><?php echo $row["id_mhs"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["umur"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>

      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>

</html>
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "pweb");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
>>>>>>> 09bdf35934404a20c2b0b53f6f238a7abc2fe6af
