<?php

$conn = mysqli_connect("localhost","root","","pw_A22100135");

$query = mysqli_query($conn,"SELECT * FROM mahasiswa");

$mahasiswa = [];
while($mhs = mysqli_fetch_assoc($query)){
    $mahasiswa[] = $mhs;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>

        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs["gambar"]; ?>" width="60"></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
            <td>
                <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>