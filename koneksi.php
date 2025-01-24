<?php
$hostname = "localhost";
$username = "root";
$password = "Anangnaz";
$db_name = "db_wifi";

$db = new mysqli($hostname, $username, $password, $db_name);

if ($db->connect_error) {
    echo "koneksi gagal";
} else {

}
