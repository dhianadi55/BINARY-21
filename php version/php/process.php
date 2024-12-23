<?php
require_once 'db_connection.php'; // Memasukkan file koneksi database
require_once 'session.php'; // Memasukkan file fungsi sesi

// Memulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Mengecek apakah request menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name']; // Mengambil data 'name' dari form
    $username = $_POST['username']; // Mengambil data 'username' dari form
    $birthdate = $_POST['birthdate']; // Mengambil data 'birthdate' dari form
    $gender = $_POST['gender']; // Mengambil data 'gender' dari form
    $phone = $_POST['phone']; // Mengambil data 'phone' dari form
    $email = $_POST['email']; // Mengambil data 'email' dari form
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Mengenkripsi password

    // Validasi apakah email sudah terdaftar di database
    $emailCheckQuery = "SELECT id FROM users WHERE email = ?";
    $emailStmt = $conn->prepare($emailCheckQuery); // Menyiapkan query
    $emailStmt->bind_param("s", $email); // Mengikat parameter email
    $emailStmt->execute(); // Menjalankan query
    $emailStmt->store_result(); // Menyimpan hasil query

    if ($emailStmt->num_rows > 0) { // Jika email sudah ada
        echo "Error: Email sudah terdaftar."; // Menampilkan pesan error
        $emailStmt->close(); // Menutup statement
        exit(); // Menghentikan script
    }
    $emailStmt->close(); // Menutup statement

    // Menambahkan data pengguna baru ke tabel users
    $stmt = $conn->prepare("INSERT INTO users (name, username, birthdate, gender, phone, email, password) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $username, $birthdate, $gender, $phone, $email, $password); // Mengikat parameter

    if ($stmt->execute()) { // Jika data berhasil dimasukkan
        $_SESSION['user_id'] = $conn->insert_id; // Menyimpan user_id ke sesi
        $_SESSION['username'] = $username; // Menyimpan username ke sesi
        header("Location: ../dashboard.php"); // Redirect ke halaman dashboard
        exit(); // Menghentikan script
    } else {
        echo "Error: " . $stmt->error; // Menampilkan pesan error jika query gagal
    }

    $stmt->close(); // Menutup statement
}
?>