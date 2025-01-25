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
</head>
<body>
    <div>
        <div>
            <form action="login.php" method="POST">
                <input name="nama" type="text" placeholder="Nama" required>
                <input name="password" type="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
