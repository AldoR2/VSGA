<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .popup {
            display: none;
            width: 400px; /* Adjust width */
            padding: 20px;
            border: 1px solid #ccc;
            background: #fff;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="inputForm">
        <h2>Input Data Mahasiswa</h2>
        <form action="save_mahasiswa.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
            
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="Pertanian">Pertanian</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
            </select>

            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Produksi Pertanian">Produksi Pertanian</option>
                <option value="Hortikultura">Hortikultura</option>
            </select>

            <button type="submit">Simpan Data</button>
            <button type="button" onclick="closePopup()">Batal</button>
        </form>
    </div>

    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="students.html"><i class="fas fa-user-graduate"></i> Data Mahasiswa</a></li>
                <li><a href="books.html"><i class="fas fa-book"></i> Data Buku</a></li>
                <li><a href="borrowings.html"><i class="fas fa-book-reader"></i> Peminjaman</a></li>
                <li><a href="returns.html"><i class="fas fa-undo-alt"></i> Pengembalian</a></li>
                <li><a href="logout.php" onclick="return confirmLogout();"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span id="username">User Name</span>
                    <span id="current-date"></span>
                </div>
            </div>
            <h2>Data Mahasiswa</h2>
            <button id="addMahasiswaBtn">Tambah Mahasiswa</button>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="mahasiswaTable">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="scripts.js"></script>
    <script>
        document.getElementById('addMahasiswaBtn').onclick = function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('inputForm').style.display = 'block';
        };

        function closePopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('inputForm').style.display = 'none';
        }

        document.getElementById('overlay').onclick = function() {
            closePopup();
        };

        function confirmLogout() {
            return confirm("Are you sure you want to log out?");
        }
    </script>
</body>
</html>

<!-- KEDUA -->
<?php
session_start();
include 'db_connection.php'; // Include your database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .popup {
            display: none;
            width: 400px; /* Adjust width */
            padding: 20px;
            border: 1px solid #ccc;
            background: #fff;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="inputForm">
        <h2>Input Data Mahasiswa</h2>
        <form action="save_mahasiswa.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
            
            <label for="Nama">Nama Mahasiswa:</label>
            <input type="text" id="Nama" name="Nama" required>

            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="Pertanian">Pertanian</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
            </select>

            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Produksi Pertanian">Produksi Pertanian</option>
                <option value="Hortikultura">Hortikultura</option>
            </select>

            <button type="submit">Simpan Data</button>
            <button type="button" onclick="closePopup()">Batal</button>
        </form>
    </div>

    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="view_students.php"><i class="fas fa-user-graduate"></i> Data Mahasiswa</a></li>
                <li><a href="books.html"><i class="fas fa-book"></i> Data Buku</a></li>
                <li><a href="borrowings.html"><i class="fas fa-book-reader"></i> Peminjaman</a></li>
                <li><a href="returns.html"><i class="fas fa-undo-alt"></i> Pengembalian</a></li>
                <li><a href="logout.php" onclick="return confirmLogout();"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span id="username">User Name</span>
                    <span id="current-date"></span>
                </div>
            </div>
            <h2>Data Mahasiswa</h2>
            <button id="addMahasiswaBtn">Tambah Mahasiswa</button>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="mahasiswaTable">
                    <?php
                    // Fetch student data from the database
                    $stmt = $conn->query("SELECT * FROM mahasiswa");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>{$row['Nim']}</td>";
                        echo "<td>{$row['Nama']}</td>";
                        echo "<td>{$row['Jurusan']}</td>";
                        echo "<td>{$row['Prodi']}</td>";
                        echo "<td><button>Delete</button></td>"; // Add any action buttons as needed
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('addMahasiswaBtn').onclick = function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('inputForm').style.display = 'block';
        };

        function closePopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('inputForm').style.display = 'none';
        }

        document.getElementById('overlay').onclick = function() {
            closePopup();
        };

        function confirmLogout() {
            return confirm("Are you sure you want to log out?");
        }
    </script>
</body>
</html>

