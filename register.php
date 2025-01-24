<?php
include("koneksi.php");

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $no = $_POST['no']; 

    $nama = mysqli_real_escape_string($db, $nama);
    $password = mysqli_real_escape_string($db, $password);
    $no = mysqli_real_escape_string($db, $no);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (nama, password, no) VALUES ('$nama', '$hashed_password', '$no')";

    if (mysqli_query($db, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
