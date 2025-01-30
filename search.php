<?php
include('koneksi.php');

$searchTerm = isset($_GET['query']) ? $_GET['query'] : '';
$sql = "SELECT DISTINCT kabupaten, kecamatan, desa FROM daerah WHERE kabupaten LIKE ? OR kecamatan LIKE ? OR desa LIKE ?";

$stmt = $db->prepare($sql);
$searchTerm = "%" . $searchTerm . "%";
$stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm); // Mengikat parameter untuk ketiga kolom
$stmt->execute();
$result = $stmt->get_result();

// Ambil hasil
$results = [];
while ($row = $result->fetch_assoc()) {
    if (!empty($row['kabupaten'])) {
        $results[] = $row['kabupaten'];
    }
    if (!empty($row['kecamatan'])) {
        $results[] = $row['kecamatan'];
    }
    if (!empty($row['desa'])) {
        $results[] = $row['desa'];
    }
}

header('Content-Type: application/json');
echo json_encode(array_unique($results)); // Menggunakan array_unique untuk menghindari duplikat

// Tutup statement dan koneksi
$stmt->close();
$db->close();
