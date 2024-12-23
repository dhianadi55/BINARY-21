<?php

// Menggunakan 'require_once' untuk memastikan file 'db_connection.php' hanya dimasukkan sekali
require_once 'db_connection.php';

// Mengecek apakah session sudah dimulai, jika belum, maka mulai session baru
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Memulai sesi
}

// Memastikan fungsi 'loginUser' hanya dideklarasikan sekali
if (!function_exists('loginUser')) {
    function loginUser($user_id, $username) {
        $_SESSION['user_id'] = $user_id; // Menyimpan ID pengguna ke session
        $_SESSION['username'] = $username; // Menyimpan username ke session
    }
}

// Memastikan fungsi 'logoutUser' hanya dideklarasikan sekali
if (!function_exists('logoutUser')) {
    function logoutUser() {
        session_unset(); // Menghapus semua variabel sesi
        session_destroy(); // Menghancurkan sesi
        header("location: ../index.php"); // Redirect ke halaman index.php setelah logout
        exit(); // Menghentikan eksekusi kode setelah redirect
    }
}

// Memastikan fungsi 'isLoggedIn' hanya dideklarasikan sekali
if (!function_exists('isLoggedIn')) {
    function isLoggedIn() {
        return isset($_SESSION['user_id']); // Mengecek apakah ID pengguna ada di sesi
    }
}

// Memastikan fungsi 'getLoggedInUser' hanya dideklarasikan sekali
if (!function_exists('getLoggedInUser')) {
    function getLoggedInUser() {
        return isset($_SESSION['username']) ? $_SESSION['username'] : null; // Mengambil username dari sesi jika ada
    }
}
?>