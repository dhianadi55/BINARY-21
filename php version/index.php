<?php
// Cek apakah pengguna sudah login dengan memulai session
session_start();

// Jika pengguna sudah login (session user_id ada), arahkan ke halaman dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php'); // Arahkan ke dashboard jika sudah login
    exit(); // Hentikan eksekusi script setelah pengalihan
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link ke file CSS untuk styling -->
</head>
<body>
    <!-- Bagian kiri yang menampilkan logo -->
    <div class="left-section">
        <img src="assets/logo.png" alt="Website Logo"> <!-- Logo website -->
    </div>

    <!-- Bagian kanan yang menampilkan judul dan tombol -->
    <div class="right-section">
        <h1>BINARY</h1> <!-- Nama Website -->
        <h2>Mahasiswa Informatika Angkatan 21</h2> <!-- Deskripsi website -->
        <button id="create-account-btn">Buat Akun</button> <!-- Tombol untuk membuat akun -->
        <p>Dengan mendaftar, Anda menyetujui persyaratan layanan dan kebijakan privasi, termasuk penggunaan kuki.</p>
        <a id="login-btn" href="#">Sudah punya akun? Masuk</a> <!-- Tautan untuk login bagi pengguna yang sudah punya akun -->
    </div>

    <!-- Popup untuk membuat akun baru -->
    <div id="create-popup" class="popup">
        <span class="popup-close">&times;</span> <!-- Tombol untuk menutup popup -->
        <form id="create-form" action="php/process.php" method="POST"> <!-- Form untuk input data pendaftaran -->
            <input type="text" id="name" name="name" placeholder="full name" required><br> <!-- Input untuk nama -->
            <input type="text" id="username" name="username" placeholder="username" required><br> <!-- Input untuk username -->
            
            <label for="birthdate">Tanggal Lahir:</label><br>
            <input type="date" id="birthdate" name="birthdate" required> <!-- Input untuk tanggal lahir -->
            <small>Ini tidak akan ditampilkan secara publik. Konfirmasikan usia Anda sendiri.</small><br> <!-- Penjelasan mengenai tanggal lahir -->

            <label>Jenis Kelamin:</label><br>
            <div style="display: flex; align-items: center;">
                Male <input type="radio" id="male" name="gender" value="male" style="margin-left: 3px; transform: scale(0.8);">
                Female <input type="radio" id="female" name="gender" value="female" style="margin-right: 3px; transform: scale(0.8);">
            </div><br> <!-- Pilihan jenis kelamin -->
            <input type="text" id="phone" name="phone" placeholder="phone number" required><br> <!-- Input untuk nomor telepon -->
            <input type="email" id="email" name="email" placeholder="email" required><br> <!-- Input untuk email -->
            <input type="password" id="password" name="password" placeholder="password" required><br> <!-- Input untuk password -->

            <button type="submit">Sign Up</button> <!-- Tombol untuk submit form -->
        </form>
    </div>

    <!-- Popup untuk login -->
    <div id="login-popup" class="popup">
        <span class="popup-close">&times;</span> <!-- Tombol untuk menutup popup -->
        <form id="login-form" action="php/login.php" method="POST"> <!-- Form untuk login -->
            <input type="text" id="login-username" name="username" placeholder="username/email/nomor telepon" required><br> <!-- Input untuk username/email/nomor telepon -->
            <input type="password" id="login-password" name="password" placeholder="password" required><br> <!-- Input untuk password -->
            <button type="submit">Masuk</button> <!-- Tombol untuk login -->
            <a href="#" id="forgot-password">Lupa Kata Sandi?</a> <!-- Tautan untuk reset password -->
        </form>
    </div>

    <script src="js/script.js"></script> <!-- Script JavaScript untuk interaksi dengan halaman -->
</body>
</html>