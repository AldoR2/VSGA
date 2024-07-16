<?php
$servername = "localhost";
$username = "root"; // biasanya 'root' untuk XAMPP
$password = ""; // biasanya kosong untuk XAMPP
$dbname = "perpustakaan2"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>