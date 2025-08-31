<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "polban_mahasiswa";

    $conn = new mysqli($host, $user, $pass, $db );

    if ($conn->connect_error){
        die("koneksi gagal: ". $conn->connect_error);
    }

    $nim = $_GET['nim'];
    $sql = "SELECT nim, nama, umur FROM mahasiswa where nim=$nim";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = $result->fetch_assoc();
        echo "<h1>Detail Mahasiswa</h1>
        <h2>Nim: ".$data['nim']."</h2>
        <h2>Nama: ".$data['nama']."</h2>
        <h2>Umur: ".$data['umur']."</h2>"
    ?>
    <a href="latihan8.php">Kembali</a>
</body>
</html>