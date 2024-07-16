<?php
include '../config/index.php';
session_start();

if (isset($_SESSION['username'])) {
    echo "<script>alert('Anda telah login sebelumnya');</script>";
    echo "<script>window.location.href = '../views/dashboard.html';</script>";
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna berdasarkan username
    $sql = "SELECT * FROM mahasiswa WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

      // Jika pengguna ditemukan
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) { // 'password' adalah kolom password yang di-hash dalam database
            $_SESSION['username'] = $row['username'];
            header("Location: ../views/dashboard.html");
            exit();
        } else {
            // Password salah
            echo "<script>alert('password Anda salah. Silakan coba lagi!')</script>";
        }
    } else {
        // Username tidak ditemukan
        echo "<script>alert('Username tidak ditemukan. Silakan coba lagi!')</script>";
    }

    // Tutup statement
    $stmt->close();
}

// Tutup koneksi
$conn->close();
?>