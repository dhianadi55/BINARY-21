<?php
include('php/db_connection.php'); // Menyertakan file koneksi database

session_start(); // Memulai session untuk memeriksa status login

// Mengecek apakah pengguna sudah login, jika belum, arahkan ke index.php
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php'); // Redirect ke halaman login jika belum login
    exit(); // Menghentikan eksekusi lebih lanjut
}

// Query untuk mengambil data pengguna dari tabel 'users'
$sql = "SELECT id, name, username, email FROM users"; 
$result = $conn->query($sql); // Eksekusi query dan simpan hasilnya
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Database Binary 21</title>
    <style>
        /* Reset dan style global untuk elemen-elemen seperti body, h1, tabel, th, dan td */
        body, h1, table, th, td {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4; /* Warna latar belakang body */
            color: #333; /* Warna teks */
            padding: 20px; /* Memberikan padding */
        }

        h1 {
            text-align: center; /* Menyelaraskan teks ke tengah */
            font-size: 36px; /* Ukuran font judul */
            color: #333; /* Warna teks judul */
            margin-bottom: 20px; /* Jarak bawah judul */
        }

        /* Container untuk konten yang terpusat */
        .container {
            width: 80%; /* Lebar container */
            margin: 0 auto; /* Mengatur margin kiri dan kanan secara otomatis */
            background-color: white; /* Latar belakang putih */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            padding: 20px; /* Padding di dalam container */
            border-radius: 8px; /* Radius sudut untuk membulatkan sudut */
        }

        /* Styling untuk tabel */
        table {
            width: 100%; /* Lebar tabel 100% dari container */
            border-collapse: collapse; /* Menghilangkan jarak antar sel tabel */
            margin-top: 20px; /* Jarak atas tabel */
        }

        th, td {
            padding: 12px; /* Padding di dalam sel */
            text-align: left; /* Penyelarasan teks ke kiri */
            border: 1px solid #ddd; /* Border tabel */
        }

        th {
            background-color: #a2d16f; /* Warna latar belakang header tabel */
            color: #fff; /* Warna teks header */
            font-weight: bold; /* Teks header menjadi tebal */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Warna latar belakang untuk baris genap */
        }

        tr:hover {
            background-color: #e2e2e2; /* Efek hover untuk baris */
        }

        /* Gaya untuk tombol logout */
        .btn {
            background-color: #333; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            text-decoration: none; /* Menghilangkan garis bawah */
            border-radius: 4px; /* Membulatkan sudut tombol */
            margin-top: 20px; /* Jarak atas tombol */
            display: inline-block; /* Menjadikan tombol inline */
        }

        .btn:hover {
            background-color: #555; /* Warna latar belakang saat hover pada tombol */
        }

        /* Desain responsif untuk tampilan di perangkat mobile */
        @media (max-width: 768px) {
            .container {
                width: 95%; /* Lebar container menjadi 95% pada layar kecil */
            }

            h1 {
                font-size: 28px; /* Ukuran font judul lebih kecil */
            }

            table {
                font-size: 14px; /* Ukuran font dalam tabel lebih kecil */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>

        <?php if ($result->num_rows > 0): ?> <!-- Mengecek apakah ada hasil dari query -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?> <!-- Loop untuk menampilkan data -->
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td> <!-- Menampilkan ID -->
                            <td><?php echo htmlspecialchars($row['name']); ?></td> <!-- Menampilkan nama -->
                            <td><?php echo htmlspecialchars($row['username']); ?></td> <!-- Menampilkan username -->
                            <td><?php echo htmlspecialchars($row['email']); ?></td> <!-- Menampilkan email -->
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak ada data yang tersedia.</p> <!-- Menampilkan pesan jika tidak ada data -->
        <?php endif; ?>

        <a href="logout.php" class="btn">Logout</a> <!-- Tombol logout -->
    </div>

    <?php $conn->close(); ?> <!-- Menutup koneksi database -->
</body>
</html>