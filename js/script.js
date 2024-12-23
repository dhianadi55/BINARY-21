document.addEventListener("DOMContentLoaded", () => {
    // Menampilkan dan menyembunyikan popup
    document.querySelector("#create-account-btn").addEventListener("click", () => {
        document.querySelector("#create-popup").style.display = "block"; // Tampilkan popup "Buat Akun"
    });

    document.querySelector("#login-btn").addEventListener("click", () => {
        document.querySelector("#login-popup").style.display = "block"; // Tampilkan popup "Masuk"
    });

    document.querySelectorAll(".popup-close").forEach(button => {
        button.addEventListener("click", () => {
            button.closest(".popup").style.display = "none"; // Sembunyikan popup terdekat saat tombol ditutup
        });
    });

    // Validasi form untuk "Buat Akun"
    document.querySelector("#create-form").addEventListener("submit", event => {
        const name = document.querySelector("#name").value; // Ambil nilai dari field nama
        const username = document.querySelector("#username").value; // Ambil nilai dari field username
        const email = document.querySelector("#email").value; // Ambil nilai dari field email
        const password = document.querySelector("#password").value; // Ambil nilai dari field password

        if (!name || !username || !email || !password) { // Periksa apakah ada field yang kosong
            alert("Semua field wajib diisi."); // Tampilkan peringatan jika ada field kosong
            event.preventDefault(); // Cegah form dikirim
        }
    });

    // Validasi form untuk "Masuk"
    document.querySelector("#login-form").addEventListener("submit", event => {
        const loginUsername = document.querySelector("#login-username").value; // Ambil nilai dari field username login
        const loginPassword = document.querySelector("#login-password").value; // Ambil nilai dari field password login

        if (!loginUsername || !loginPassword) { // Periksa apakah field username atau password kosong
            alert("Username dan Password wajib diisi."); // Tampilkan peringatan jika ada field kosong
            event.preventDefault(); // Cegah form dikirim
        }
    });
});