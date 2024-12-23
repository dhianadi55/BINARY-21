<?php
$host = 'localhost'; // Nama host database
$user = 'root'; // Username untuk koneksi ke database
$pass = ''; // Password untuk koneksi ke database (kosong untuk default)
$db = 'binary_db'; // Nama database yang akan digunakan

// Membuat koneksi ke database menggunakan MySQLi
$conn = new mysqli($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); // Hentikan script jika koneksi gagal
}
?>