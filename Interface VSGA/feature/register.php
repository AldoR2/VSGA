<?php
include '../config/index.php';
session_start();

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Query untuk menyimpan data pengguna
    $sql = "INSERT INTO mahasiswa (username, nim, nama, prodi, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $nim, $nama, $prodi, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berhasil. Silakan login!')</script>";
        header("Location: ../views/login.html"); // Redirect to login page
        exit();
    } else {
        echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.')</script>";
    }

    $stmt->close();
}

$conn->close();
?>