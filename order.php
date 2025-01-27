<?php
// include("koneksi.php");

// $nama = $_POST['nama'];
// $nomor_telepon = $_POST['nomor_telepon'];
// $kabupaten = $_POST['kabupaten'];
// $kecamatan = $_POST['kecamatan'];
// $desa = $_POST['desa'];

// $sql = "INSERT INTO transaksi (nama, nomor_telepon, kabupaten, kecamatan, desa) VALUES ('$nama', '$nomor_telepon', '$kabupaten', '$kecamatan', '$desa')";

// if ($conn->query($sql) === TRUE) {
//     echo "Data berhasil disimpan ke database.";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
            width: 300px;
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

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <form action="insert.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="tel" id="nomor_telepon" name="no" required>

            <label for="kabupaten">Kabupaten:</label>
            <input type="text" id="kabupaten" name="kabupaten" required>

            <label for="kecamatan">Kecamatan:</label>
            <input type="text" id="kecamatan" name="kecamatan" required>

            <label for="desa">Desa:</label>
            <input type="text" id="desa" name="desa" required>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>

</html>

</html>