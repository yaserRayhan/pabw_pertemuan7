<?php
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
    <table cellpadding="10">
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><?= $mhs["nama"]; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td><?= $mhs["nim"]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td><?= $mhs["email"]; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td> : </td>
            <td><img src="img/<?= $mhs["gambar"]; ?>" width="60"></td>
        </tr>
        <tr>
            <td><a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> </td>
            <td> | </td>
            <td><a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></td>
        </tr>
    </table>
    <br>
    <a href="latihan3.php">Kembali ke daftar mahasiswa</a>
</body>
</html>