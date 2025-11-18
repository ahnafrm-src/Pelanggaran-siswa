# 🏫 Sistem Informasi Pelanggaran Siswa (SIPEL)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

**Pelanggaran-siswa** adalah aplikasi berbasis web yang dirancang untuk mendigitalisasi pencatatan poin tata tertib dan kedisiplinan di lingkungan sekolah. Aplikasi ini memudahkan Guru Bimbingan Konseling (BK), Wali Kelas, dan Kesiswaan dalam memantau, mencatat, dan melaporkan pelanggaran siswa secara transparan dan *real-time*.

## ✨ Fitur Utama

Sistem ini dilengkapi dengan fitur-fitur esensial untuk manajemen kedisiplinan:

* **Dashboard Eksekutif**: Ringkasan statistik pelanggaran hari ini, bulan ini, dan siswa dengan poin tertinggi.
* **Manajemen Data Master**:
    * Data Siswa, Kelas, dan Jurusan.
    * Data Jenis Pelanggaran & Bobot Poin.
* **Pencatatan Pelanggaran**: Input kasus siswa dengan kalkulasi akumulasi poin otomatis.
* **Sistem Peringatan (SP)**: Notifikasi otomatis jika poin siswa mencapai ambang batas SP1, SP2, atau SP3.
* **Laporan & Cetak**: Fitur cetak surat panggilan orang tua dan rekapitulasi pelanggaran per periode.
* **Multi-Level User**: Hak akses berbeda untuk Admin, Guru BK, dan Wali Kelas.

## 🛠️ Teknologi yang Digunakan

Project ini dibangun menggunakan teknologi berikut:

* **Bahasa Pemrograman**: PHP
* **Framework**: Laravel / CodeIgniter / Native PHP (Sesuaikan ini)
* **Database**: MySQL
* **Frontend**: HTML, CSS (Bootstrap/Tailwind), JavaScript
* **Tools**: Git, Composer

## 📂 Susunan Project

Struktur direktori utama dalam repositori ini:

```text
Pelanggaran-siswa/
├── app/                # Logika utama aplikasi
├── config/             # Konfigurasi sistem
├── database/           # Migrasi database
├── public/             # Aset publik (CSS, JS, Images)
├── resources/          # Views (Tampilan)
├── routes/             # Routing URL
└── README.md           # Dokumentasi ini
⚙️ Prasyarat Instalasi
Sebelum menjalankan aplikasi, pastikan komputer Anda memiliki:

PHP (Minimal versi 8.0).

Composer.

Web Server (Apache/Nginx atau XAMPP/Laragon).

Database Server (MySQL).

🚀 Cara Instalasi & Penggunaan
Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal:

1. Clone Repositori
Bash

git clone [https://github.com/ahnafrm-src/Pelanggaran-siswa.git](https://github.com/ahnafrm-src/Pelanggaran-siswa.git)
cd Pelanggaran-siswa
2. Install Dependencies
Bash

composer install
3. Konfigurasi Environment
Salin file .env.example menjadi .env dan atur koneksi database Anda:

Bash

cp .env.example .env
Edit file .env:

Ini, TOML

DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
4. Setup Database
Bash

php artisan key:generate
php artisan migrate --seed
5. Jalankan Aplikasi
Bash

php artisan serve
Buka browser dan akses: http://localhost:8000

🤝 Kontribusi
Kontribusi sangat terbuka! Silakan Fork repository ini dan buat Pull Request.

📝 Lisensi
Proyek ini didistribusikan di bawah lisensi MIT.

Dibuat dengan ❤️ oleh ahnafrm-src


### Apa langkah selanjutnya?
Setelah Anda meng-copy kode di atas:
1. Buka file `README.md` di project Anda.
2. Hapus semua isinya (jika ada).
3. **Paste** kode di atas.
4. Simpan file (Save).
5. Lakukan commit dan push ke GitHub:
   ```bash
   git add README.md
   git commit -m "Update README.md"
   git push origin main
