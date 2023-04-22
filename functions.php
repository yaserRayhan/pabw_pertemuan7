<?php

function koneksi(){
    return mysqli_connect("localhost","root","","pw_A22100135");
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn,$query);

    // Jika hasilnya hanya satu data
    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    $conn = koneksi();

    $namaGambar = htmlspecialchars($data['gambar']);
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "INSERT INTO mahasiswa VALUES
                (null,'$nim','$nama','$email','$jurusan','$namaGambar')";
    mysqli_query($conn,$query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}