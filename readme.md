# Web Application - Binary (Mahasiswa Informatika)

Proyek ini adalah aplikasi web buat manajemen mahasiswa dan sistem login. Aplikasinya punya fitur registrasi dan login pengguna, plus dashboard simpel buat pengguna yang udah login.

## Fitur Aplikasi

- **Registrasi Pengguna**: Pengguna bisa bikin akun dengan ngisi nama, username, tanggal lahir, jenis kelamin, nomor HP, email, dan password.
- **Login Pengguna**: Pengguna yang udah punya akun bisa login pake username/email sama password.
- **Dashboard Pengguna**: Setelah berhasil login, pengguna langsung diarahkan ke dashboard yang nampilin daftar pengguna dari database.
- **Logout Pengguna**: Pengguna bisa keluar dari aplikasi dan balik ke halaman utama.

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
     git remote add origin <your-repository-url>
     git push -u origin master
     ```
4. **Aktifkan GitHub Pages**: Di pengaturan repository GitHub, aktifkan GitHub Pages buat nampilin file `index.html` sebagai halaman utama.
5. **Akses Aplikasi Kamu**: Sekarang aplikasi kamu bisa diakses lewat URL GitHub Pages yang disediain.

---

## Rekomendasi Hosting

Hosting yang paling cocok buat aplikasi ini adalah **GitHub Pages** karena:

- Gratis buat hosting konten statis (HTML, CSS, JavaScript).
- Setup-nya gampang banget.
- HTTPS otomatis buat koneksi aman.

GitHub Pages pas banget buat aplikasi statis yang nggak butuh backend atau database.

---

## Tips Biar Aplikasi Kamu Aman

Biar aplikasi web kamu lebih aman waktu di-host di GitHub Pages, perhatiin langkah-langkah ini:

1. **HTTPS**: GitHub Pages otomatis nyediain HTTPS, jadi komunikasi antara pengguna sama server aman.
2. **Validasi Input Pengguna**: Pastikan semua input pengguna tervalidasi biar nggak ada celah kayak Cross-Site Scripting (XSS). Misalnya, pake `htmlspecialchars()` buat mencegah serangan XSS.
3. **Manajemen Sesi**: Kelola sesi pengguna dengan baik. Pengguna yang belum login diarahkan ke halaman login, sedangkan yang udah login diarahkan ke dashboard.

---

## Konfigurasi Server yang Diperlukan

Karena aplikasi ini di-host pake GitHub Pages (platform hosting statis), konfigurasi server yang ribet nggak dibutuhin. Yang perlu diperhatiin:

- **HTTPS Otomatis**: GitHub Pages nyediain HTTPS buat ngamanin data yang ditransfer.
- **CDN (Content Delivery Network)**: GitHub Pages pake CDN buat ngasih konten lebih cepat dan ningkatin waktu muat aplikasi.
- **Tanpa Konfigurasi Server-Side**: Aplikasi ini nggak butuh processing di sisi server atau database. Kalau nanti aplikasinya berkembang dan butuh fitur backend, kamu bisa coba hosting lain kayak Heroku, Netlify, atau AWS.

---

## Teknologi yang Dipake

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (buat login dan registrasi pengguna)
- **Database**: MySQL (buat nyimpen data pengguna)
- **Hosting**: GitHub Pages (buat file statis)

---

## Instalasi dan Cara Pakai

1. **Clone Repository**:
   ```bash
   git clone <repository-url>
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
     git remote add origin <repository-url>
     git push -u origin master
     ```
4. **Gunakan GitHub Pages (buat hosting statis)**: Aktifkan GitHub Pages dari pengaturan repository dan pilih branch yang berisi file utama aplikasi (biasanya `master` atau `main`).
5. **Akses Aplikasi**: Aplikasi kamu bakal bisa diakses publik lewat URL GitHub Pages.

---

## Catatan Hosting dan Keamanan

1. **Rekomendasi Hosting**:
   - **GitHub Pages** cocok banget buat aplikasi statis, gratis, ada HTTPS, dan gampang dipake buat developer pemula.

2. **Tips Keamanan**:
   - Pake HTTPS buat enkripsi data yang dikirim.
   - Validasi input pengguna biar aman dari serangan XSS atau SQL Injection.
   - Kelola sesi pengguna dengan baik, kayak nentuin session timeout atau pake setting `session.cookie_secure` biar sesi cuma jalan lewat HTTPS.

3. **Konfigurasi Server**:
   - Nggak perlu konfigurasi yang ribet di GitHub Pages.
   - Fitur keamanan kayak HTTPS dan CDN udah aktif otomatis.
   - Pastikan file statis (CSS, JS, gambar) diatur dengan baik dan bisa diakses browser.