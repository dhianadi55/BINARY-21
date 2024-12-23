# Web Application - Binary (Mahasiswa Informatika)

Proyek ini adalah aplikasi web buat manajemen mahasiswa dan sistem login. Aplikasinya punya fitur registrasi dan login User, plus dashboard simpel buat User yang udah login.

## Fitur Aplikasi

- **Registrasi User**: User bisa bikin akun dengan ngisi nama, username, tanggal lahir, jenis kelamin, nomor HP, email, dan password.
- **Login User**: User yang udah punya akun bisa login pake username/email sama password.
- **Dashboard User**: Setelah berhasil login, User langsung diarahkan ke dashboard yang nampilin daftar User dari database.
- **Logout User**: User bisa keluar dari aplikasi dan balik ke halaman utama.

---

## Cara Host Aplikasi Web di GitHub Pages

1. **Persiapkan Aplikasi Web Kamu**: Pastikan aplikasimu jalan lancar di komputer lokal.
2. **Buat Repository di GitHub**: Bikin repository baru di GitHub buat nyimpen kode aplikasi.
3. **Push Kode ke GitHub**:

   - Inisialisasi Git di folder proyek kamu:
     ```bash
     git init
     ```
   - Tambahin dan commit semua file:
     ```bash
     git add .
     git commit -m "Initial commit"
     ```
   - Hubungkan repository lokal ke GitHub dan push kode:
     ```bash
     git remote add origin https://github.com/dhianadi55/BINARY-21.git
     git push -u origin master
     ```
4. **Aktifkan GitHub Pages**: Di pengaturan repository GitHub, aktifkan GitHub Pages buat nampilin file `index.html` sebagai halaman utama.
5. **Akses Aplikasi Kamu**: Sekarang aplikasi kamu bisa diakses lewat URL GitHub Pages yang disediain.

---

## Catatan Hosting dan Keamanan

## Rekomendasi Hosting

Hosting yang paling cocok dipake buat developer pemula seperti saya dalam membuat aplikasi ini adalah **GitHub Pages** karena:

- Gratis buat hosting konten statis (HTML, CSS, JavaScript).
- Setup-nya gampang banget.
- HTTPS otomatis buat koneksi aman.

---

## Keamanan Aplikasi Web

Biar aplikasi web kamu lebih aman waktu di-host di GitHub Pages, perhatiin langkah-langkah ini:

1. **HTTPS**: GitHub Pages otomatis nyediain HTTPS, jadi komunikasi antara User sama server aman (enkripsi data yang dikirim).
2. **Validasi Input User**: Pastikan semua input User tervalidasi biar nggak ada celah kayak Cross-Site Scripting (XSS) atau SQL Injection. Misalnya, pake `htmlspecialchars()` buat mencegah serangan XSS.
3. **Manajemen Sesi**: Kelola sesi User dengan baik. User yang belum login diarahkan ke halaman login, sedangkan yang udah login diarahkan ke dashboard. Bisa juga kayak nentuin session timeout atau pake setting `session.cookie_secure` biar sesi cuma jalan lewat HTTPS.

---

## 3. Konfigurasi Server yang Diperlukan

Karena aplikasi ini di-host pake GitHub Pages (platform hosting statis), konfigurasi server yang ribet nggak dibutuhin. Yang perlu diperhatiin:

- **HTTPS Otomatis**: GitHub Pages nyediain HTTPS buat ngamanin data yang ditransfer (Aktif Otomatis).
- **CDN (Content Delivery Network)**: GitHub Pages pake CDN buat ngasih konten lebih cepat dan ningkatin waktu muat aplikasi (Aktif Otomatis).
- **Pastikan file statis (CSS, JS, gambar) diatur dengan baik dan bisa diakses browser.
- **Tanpa Konfigurasi Server-Side**: Aplikasi ini nggak butuh processing di sisi server atau database. Kalau nanti aplikasinya berkembang dan butuh fitur backend bisa coba hosting di Heroku, Netlify, atau AWS.

---

## Teknologi yang Dipake

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (buat login dan registrasi User)
- **Database**: MySQL (buat nyimpen data User)
- **Hosting**: GitHub Pages (buat file statis)

---

## Instalasi dan Cara Pakai

1. **Clone Repository**:
   ```bash
   git clone https://github.com/dhianadi55/BINARY-21.git
   ```
2. **Setup Database**:
   - Import file SQL buat bikin database `binary_db` dan tabel `users`.
3. **Konfigurasi Koneksi Database**:
   - Update konfigurasi database di `db_connection.php` sesuai pengaturan database lokal kamu.
4. **Jalankan Aplikasi**:
   - Aplikasi bisa dijalankan di server lokal pake PHP atau di-host di GitHub Pages.

---

## Langkah Hosting di GitHub Pages

1. **Persiapkan Aplikasi Web**: Pastikan semua file aplikasi web (HTML, CSS, JavaScript, dll.) lengkap dan jalan di lokal.
2. **Buat Repository GitHub**: Bikin repository baru buat nyimpen kode aplikasi.
3. **Push Kode ke GitHub**:
   - Inisialisasi repository, tambahin file, dan commit:
     ```bash
     git init
     git add .
     git commit -m "Initial commit"
     ```
   - Hubungkan repository dan push kode:
     ```bash
     git remote add origin https://github.com/dhianadi55/BINARY-21.git
     git push -u origin master
     ```
4. **Gunakan GitHub Pages (buat hosting statis)**: Aktifkan GitHub Pages dari pengaturan repository dan pilih branch yang berisi file utama aplikasi (biasanya `master` atau `main`).
5. **Akses Aplikasi**: Aplikasi kamu bakal bisa diakses publik lewat URL GitHub Pages.

---
