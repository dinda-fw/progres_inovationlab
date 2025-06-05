Progres Proyek WebGIS Inovation Lab

🌍 WebGIS SDGs – Pemetaan Interaktif Berbasis Data Terbuka
Proyek ini merupakan aplikasi Web-GIS yang mendukung tujuan Sustainable Development Goals (SDGs), dengan integrasi data spasial berbasis OpenStreetMap dan data terbuka dari sumber resmi seperti data.go.id dan BPS. Aplikasi ini dibangun menggunakan HTML, PHP, MySQL, dan Leaflet.js.

Tahapan Pengembangan
Tahap 1: Integrasi Peta OpenStreetMap
Menggunakan Leaflet.js untuk menampilkan peta interaktif di halaman dashboard.
Ditambahkan marker dummy untuk simulasi lokasi (misalnya pendidikan, sanitasi, desa tertinggal).

Tahap 2: Autentikasi Pengguna
Login dan registrasi menggunakan PHP dan database MySQL.
Enkripsi password menggunakan password_hash() dan verifikasi dengan password_verify().
Session digunakan untuk membatasi akses ke halaman dashboard.

Tahap 3: Integrasi Data Terbuka
Data dari portal resmi seperti data.go.id atau BPS ditampilkan di peta.
Data digunakan untuk menunjukkan indikator SDGs seperti jumlah sekolah, desa tertinggal, dan sanitasi.
Data ditampilkan dengan marker dan popup informasi pada peta.

Tahap 4: Penyempurnaan UI/UX dan Keamanan
Tampilan dibuat responsif dengan Tailwind CSS atau Bootstrap.
Validasi input form di sisi klien dan server.
Proteksi halaman login dan logout menggunakan session PHP.

Teknologi yang Digunakan
HTML, CSS (Tailwind atau Bootstrap)
JavaScript (Leaflet.js)
PHP (Native)
MySQL
OpenStreetMap

Cara Menjalankan
Salin semua file ke direktori server lokal (XAMPP/htdocs).
Import file database.sql ke MySQL melalui phpMyAdmin.
Jalankan melalui browser: http://localhost/nama-folder/landing.html.
Registrasi akun, lalu login untuk mengakses dashboard.
