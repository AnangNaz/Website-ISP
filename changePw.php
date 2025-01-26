<?php
session_start();
include("koneksi.php");

if (isset($_POST['update_password'])) {
    $nama = $_POST['nama'];
    $password_lama = $_POST['password_lama'];
    $password_baru = $_POST['password_baru'];

    $nama = mysqli_real_escape_string($db, $nama);
    $password_baru_hashed = password_hash($password_baru, PASSWORD_DEFAULT); 
    $query = "SELECT * FROM users WHERE nama = '$nama'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password_lama, $user['password'])) {
            $update_query = "UPDATE users SET password = '$password_baru_hashed' WHERE nama = '$nama'";
            if (mysqli_query($db, $update_query)) {
                $_SESSION['message'] = "Password berhasil diupdate!";
            } else {
                $_SESSION['message'] = "Terjadi kesalahan saat mengupdate password: " . mysqli_error($db);
            }
        } else {
            $_SESSION['message'] = "Password lama salah!";
        }
    } else {
        $_SESSION['message'] = "Nama pengguna tidak ditemukan!";
    }

    header("Location: changePw.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .main {
        height: 100vh;
    }

    .login-box {
        width: 500px;
        height: 600px;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
<div class="main d-flex justify-content-center align-items-center">
    <div class="login-box">
        <h3 class="text-center">Ganti Password</h3>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']); 
                ?>
            </div>
        <?php endif; ?>

        <form action="changePw.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Username</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="passwordLama" class="form-label">Password lama</label>
                <input type="password" class="form-control" name="password_lama" id="passwordLama" required>
            </div>
            <div class="mb-3">
                <label for="passwordBaru" class="form-label">Password baru</label>
                <input type="password" class="form-control" name="password_baru" id="passwordBaru" required>
            </div>
            <div class="mb-3">
                <label for="confPw" class="form-label">Confirm password baru</label>
                <input type="password" class="form-control" name="password_konfirmasi" id="confPw" required>
            </div>
            <button class="btn btn-primary w-100" type="submit" name="update_password">Ganti Password</button>
        </form>
        
        <p class="text-center mt-3">
            Belum punya akun? <a href="register.php">Registrasi di sini</a>
        </p>
        <p class="text-center mt-3">
            Anda ingin mengganti password? <a href="changePw.php">klik di sini</a>
        </p>
        <div class="d-flex justify-content-center mt-3">
            <a href="login.php" class="btn btn-primary w-50">Login</a>
        </div>
    </div>
</div>
</body>

</html>