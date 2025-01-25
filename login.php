<?php
include("koneksi.php");

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    
    $nama = mysqli_real_escape_string($db, $nama);

    
    $query = "SELECT * FROM users WHERE nama = '$nama'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        
        if (password_verify($password, $user['password'])) {
            
            echo "Login berhasil! Selamat datang, " . $user['nama'] . "!";
        } else {
            
            echo "Password salah!";
        }
    } else {
        echo "Nama pengguna tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .main {
        height: 100vh;
    }
    .login-box {
        width: 400px;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
</style>
<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box">
            <h3 class="text-center">Login</h3>
            <form action="login-process.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>
            <p class="text-center mt-3">
                Belum punya akun? <a href="index.php">Registrasi di sini</a>
            </p>
        </div>
    </div>
</body>
</html>
