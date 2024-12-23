-- Membuat database baru dengan nama 'binary_db'
CREATE DATABASE binary_db;

-- Menggunakan database 'binary_db' yang baru dibuat
USE binary_db;

-- Membuat tabel 'users' dengan kolom-kolom untuk menyimpan data pengguna
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY, -- Kolom 'id' sebagai primary key dengan auto increment
    name VARCHAR(64) NOT NULL, -- Kolom 'name' untuk nama pengguna, tidak boleh kosong
    username VARCHAR(32) NOT NULL, -- Kolom 'username' untuk nama pengguna yang unik, tidak boleh kosong
    birthdate DATE NOT NULL, -- Kolom 'birthdate' untuk tanggal lahir pengguna, tidak boleh kosong
    gender ENUM('male', 'female') NOT NULL, -- Kolom 'gender' untuk jenis kelamin, hanya bisa 'male' atau 'female'
    phone VARCHAR(15) NOT NULL, -- Kolom 'phone' untuk nomor telepon, tidak boleh kosong
    email VARCHAR(64) NOT NULL, -- Kolom 'email' untuk alamat email, tidak boleh kosong
    password VARCHAR(255) NOT NULL, -- Kolom 'password' untuk kata sandi pengguna, tidak boleh kosong
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL, -- Kolom 'created_at' untuk mencatat waktu pembuatan data, otomatis diisi dengan timestamp saat ini
    INDEX (username), -- Membuat index untuk kolom 'username' agar pencarian lebih cepat
    INDEX (email) -- Membuat index untuk kolom 'email' agar pencarian lebih cepat
);