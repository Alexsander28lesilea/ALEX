# CryptoWebTools

🚀 **CryptoWebTools** adalah proyek berbasis **Laravel** yang dikembangkan sebagai bagian dari ujian akhir semester dalam mata kuliah **Kriptografi**. Proyek ini menyediakan berbagai alat keamanan digital, termasuk **enkripsi & dekripsi berbasis kriptografi simetris**, serta **generator QR Code yang dapat dikustomisasi dengan tanda tangan digital**.

## ✨ Fitur Utama

🔑 **Enkripsi & Dekripsi** – Menggunakan **kriptografi kunci simetris** untuk melindungi data sensitif.

📷 **QR Code Generator** – Membuat QR Code yang dapat dikustomisasi (warna, ukuran) dan ditandatangani secara digital.

🔐 **Autentikasi Laravel Breeze** – Implementasi login dan registrasi yang aman menggunakan Laravel Breeze.

🛡 **Perlindungan Keamanan** – Mencegah berbagai serangan seperti **XSS, SQL Injection, dan Brute Force**.

📊 **Dashboard Interaktif** – Antarmuka yang user-friendly untuk mengelola fitur keamanan.

## 🛠 Instalasi

Sebelum memulai, pastikan telah menginstal **Laravel 11**, serta memiliki **Composer** dan **Node.js**.

```sh
# Clone repository
git clone https://github.com/Kyrize31/CryptoWebTools.git
cd CryptoWebTools

# Install dependencies
composer install
npm install && npm run dev

# Konfigurasi environment
cp .env.example .env
php artisan key:generate

# Migrasi database
php artisan migrate

# Jalankan server
php artisan serve
```

## 📌 Penggunaan

1. **Akses Aplikasi**
   - Buka browser dan akses: `http://localhost:8000`
2. **Registrasi & Login**
   - Daftar atau login dengan sistem autentikasi **Laravel Breeze**.
3. **Gunakan Fitur Utama**
   - **QR Code Generator** untuk membuat QR Code dengan tanda tangan digital.
   - **Enkripsi & Dekripsi** teks menggunakan algoritma **kriptografi simetris**.
   - **Dashboard** untuk melihat hasil proses enkripsi dan QR Code yang telah dibuat.

## 🔒 Keamanan

CryptoWebTools dilengkapi dengan berbagai mekanisme keamanan untuk melindungi pengguna:

- **Laravel Breeze** untuk autentikasi yang aman.
- **Middleware keamanan** untuk mencegah **CSRF, XSS, dan SQL Injection**.
- **Rate Limiting** untuk mencegah serangan **Brute Force**.
- **Sanitasi input pengguna** untuk menghindari eksploitasi data.

## 📸 Screenshot
Berikut adalah beberapa tampilan dari aplikasi:

- **Dashboard** 🖥️
- ![Uploading 1.png…]()

- **Enkripsi & Dekripsi** 🔐
- **Hasil Dekripsi** 📜
- **Hasil Enkripsi** 📄
- **Login & Register** 🔑
- **Profil Pengguna** 👤
- **QR Code Generator** 📷
- **Hasil QR Code** 🏷️
- **Halaman Welcome (Guest & Logged In)** 👋

## 🤝 Kontribusi
Kami menyambut kontribusi dari siapa saja. Berikut langkah-langkah untuk berkontribusi:

1. **Fork** repository ini.
2. **Buat branch baru** untuk fitur yang akan ditambahkan:
   ```sh
   git checkout -b fitur-baru
   ```
3. **Commit perubahan** dengan deskripsi yang jelas:
   ```sh
   git commit -m 'Menambahkan fitur baru'
   ```
4. **Push ke branch baru**:
   ```sh
   git push origin fitur-baru
   ```
5. **Buat Pull Request** dan ajukan perubahan.

## 📜 Lisensi

Proyek ini dirilis di bawah lisensi **MIT**. Silakan gunakan dan kembangkan sesuai kebutuhan.

---

💡 **CryptoWebTools** hadir untuk membantu meningkatkan keamanan digital dengan pendekatan yang mudah dan efisien. Jika ada pertanyaan atau masukan, jangan ragu untuk menghubungi kami atau membuat *issue* pada repository ini. 🚀


