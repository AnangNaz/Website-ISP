<?php
include('koneksi.php');

$searchTerm = isset($_GET['query']) ? $_GET['query'] : '';
$sql = "SELECT kabupaten FROM daerah WHERE kabupaten LIKE ?";
$stmt = $db->prepare($sql);
$searchTerm = "%" . $searchTerm . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$results = [];
while ($row = $result->fetch_assoc()) {
    $results[] = $row['kabupaten'];
}

// Mengembalikan hasil dalam format JSON
header('Content-Type: application/json');
echo json_encode($results);

$stmt->close();
$db->close();
?>