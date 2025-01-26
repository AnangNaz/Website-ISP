<?php
session_start();
include("koneksi.php");

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $no = $_POST['no'];

    $nama = mysqli_real_escape_string($db, $nama);
    $password = mysqli_real_escape_string($db, $password);
    $no = mysqli_real_escape_string($db, $no);
    $query_check = "SELECT * FROM users WHERE nama = '$nama'";
    $result_check = mysqli_query($db, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        echo "Nama pengguna sudah terdaftar!";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (nama, password, no) VALUES ('$nama', '$hashed_password', '$no')";

    if (mysqli_query($db, $query)) {
        $_SESSION['message'] = "Registrasi berhasil! Silakan login.";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wifi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .main {
        height: 100vh;
    }

    .login-box {
        width: 500px;
        height: 425px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box p-4 shadow">
            <h3 class="text-center">Register</h3>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="nama" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor</label>
                    <input type="text" class="form-control" name="no" id="nomor" required>
                </div>
                <button class="btn btn-primary w-100" type="submit" name="register">Register</button>
            </form>
            <p class="text-center mt-3">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>