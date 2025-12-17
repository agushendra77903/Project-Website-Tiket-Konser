<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'career_gate';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("❌ Koneksi Gagal: " . $conn->connect_error);
} else {
    echo "✅ Koneksi Berhasil ke database career_gate";
}
?>
