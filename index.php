<?php
session_start(); 
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Selamat datang di Dashboard</h1>
        <p><?php echo $_SESSION['message'] ?? ''; ?></p>
        <p>Ini adalah halaman yang hanya bisa diakses oleh pengguna yang sudah login.</p>
        <a href="login.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>