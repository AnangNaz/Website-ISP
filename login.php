<?php
session_start();
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
            if ($nama === 'admin' && $password === 'admin') {
                $_SESSION['user'] = $user['nama'];
                $_SESSION['message'] = "Login berhasil! Selamat datang, " . $user['nama'] . "!";
                header("Location: admin.php"); 
                exit();
            } else {
                $_SESSION['user'] = $user['nama'];
                $_SESSION['message'] = "Login berhasil! Selamat datang, " . $user['nama'] . "!";
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Password salah!";
        }
    } else {
        $_SESSION['message'] = "Nama pengguna tidak ditemukan!";
    }
    header("Location: login.php");
    exit();
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
        width: 500px;
        height: 425px;
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
            <h3 class="text-center">Login</h3>
            <?php if (isset($_SESSION['message'])): ?>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']); 
                }
                ?>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
            </form>
            <p class="text-center mt-3">
                Belum punya akun? <a href="register.php">Registrasi di sini</a>
            </p>
            <p class="text-center mt-3">
                Anda ingin mengganti password? <a href="changePw.php">klik di sini</a>
            </p>
        </div>
    </div>
</body>

</html>