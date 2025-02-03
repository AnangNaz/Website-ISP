<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include("koneksi.php");

// Hapus data jika ada permintaan delete untuk transaksi
if (isset($_POST['delete_transaksi'])) {
    $id = $_POST['id'];
    $stmt = $db->prepare("DELETE FROM transaksi WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Data transaksi berhasil dihapus.";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Hapus data jika ada permintaan delete untuk daerah
if (isset($_POST['delete_daerah'])) {
    $id = $_POST['id'];
    $stmt = $db->prepare("DELETE FROM daerah WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Data daerah berhasil dihapus.";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Ambil data dari tabel transaksi
$result = $db->query("SELECT * FROM transaksi");

// Ambil data dari tabel daerah
$resultDaerah = $db->query("SELECT * FROM daerah");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-danger,
        .btn-success {
            margin-top: 10px;
            padding: 10px 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        /* Tambahkan jarak antara tabel */
        .table-container {
            margin-top: 30px;
            /* Jarak antara tabel */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat datang Admin</h1>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <p class="text-center">Ini adalah halaman yang hanya bisa diakses oleh Admin.</p>

        <h2 class="text-center">Data Pelanggan AzarelNet</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['no']; ?></td>
                                <td><?php echo $row['kabupaten']; ?></td>
                                <td><?php echo $row['kecamatan']; ?></td>
                                <td><?php echo $row['desa']; ?></td>
                                <td>
                                    <form method="post" style="display:inline;" onsubmit="return confirmDelete();">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_transaksi" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <h2 class="text-center">Data Daerah</h2>
        <div class="table-responsive table-container">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Aksi</th> <!-- Tambahkan kolom untuk aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php if ($resultDaerah->num_rows > 0): ?>
                        <?php while ($row = $resultDaerah->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['kabupaten']; ?></td>
                                <td><?php echo $row['kecamatan']; ?></td>
                                <td><?php echo $row['desa']; ?></td>
                                <td>
                                    <form method="post" style="display:inline;" onsubmit="return confirmDelete();">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_daerah" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="button-container">
            <a href="login.php" class="btn btn-danger">Logout</a>
            <a href="tambah.php" class="btn btn-success">Tambah Daerah</a>
        </div>
    </div>
</body>

</html>

<?php
$db->close();
?>