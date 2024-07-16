<?php
session_start();
include 'index.php';
                    // TABEL DATA BUKU
                    $sql = "SELECT kodebk, judulbk, penulis, penerbit FROM buku";
                    $result = $conn->query($sql);
                    
                    $buku = array();
                    if ($result->num_rows > 0) {
                        // Mengambil data dari setiap baris
                        while($row = $result->fetch_assoc()) {
                            $buku[] = $row;
                        }
                    }
                    $conn->close();
?>