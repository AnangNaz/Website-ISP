<?php
session_start(); // Memulai session
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];

    $stmt = $db->prepare("INSERT INTO daerah ( kabupaten, kecamatan, desa) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",  $kabupaten, $kecamatan, $desa);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Daerah berhasil ditambah!.";
        header("Location: tambah.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah daerah</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 420px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-style {
            display: inline-block;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            width: 106%;
            padding: 10px 20px;
        }

        .button-style:hover {
            background-color: #218838;
        }

        .button1-style {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Penambahan Daerah Tercover</h1>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <form action="tambah.php" method="post">
            <label for="kabupaten">Kabupaten:</label>
            <input type="text" id="kabupaten" name="kabupaten" required>

            <label for="kecamatan">Kecamatan:</label>
            <input type="text" id="kecamatan" name="kecamatan" required>

            <label for="desa">Desa:</label>
            <input type="text" id="desa" name="desa" required>
            <button type="submit" class="button-style">Kirim</button>
            <a href="index.php" class="button1-style">Home</a>
        </form>
    </div>
</body>

</html>