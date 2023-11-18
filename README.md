# Sistem Pemesanan Kendaraan - Dokumentasi

## Deskripsi Proyek

Sistem ini dirancang untuk memfasilitasi pemesanan, pemantauan, dan manajemen kendaraan pada perusahaan tambang nikel. Dengan aplikasi ini, admin dapat mengelola pemesanan kendaraan, manajemen armada, dan data karyawan.

## Fitur Utama

- **Manajemen Pemesanan:**
  - Input pemesanan kendaraan oleh admin.
  - Persetujuan pemesanan oleh pihak yang ditentukan yaitu pihak satu dan pihak 2.
  - Monitoring status pemesanan.

- **Manajemen Kendaraan:**
  - Pendaftaran, pemeliharaan, dan penghapusan kendaraan.
  - Informasi lengkap mengenai setiap kendaraan.

- **Manajemen Karyawan:**
  - Pendaftaran dan pemeliharaan data karyawan.

- **Laporan dan Analisis:**
  - Laporan pemesanan kendaraan.
  - Statistik konsumsi BBM dan layanan kendaraan.

## Arsitektur Aplikasi Pemesanan Kendaraan
```mermaid
graph TD;
  subgraph Company
    f1[Perusahaan]
    f1 --> f2[Kantor Pusat]
    f2 --> f3[Kantor Cabang]
    f3 --> f4[Tambang 1]
    f3 --> f5[Tambang 2]
    f3 --> f6[Tambang 3]
    f3 --> f7[Tambang 4]
    f3 --> f8[Tambang 5]
    f3 --> f9[Tambang 6]
  end 
```
```mermaid
graph TD;
    subgraph Vehicles
    f10[Kendaraan Perusahaan]
    f10 --> f11[Kendaraan Angkutan Orang]
    f10 --> f12[Kendaraan Angkutan Barang]
    f10 --> f13[Kendaraan Sewa]
  end
```
```mermaid
graph TD;
    subgraph Application
    f14[Web Aplikasi]
    f14 --> f15[Monitoring Kendaraan]
    f15 --> f16[Konsumsi BBM]
    f15 --> f17[Jadwal Service]
    f15 --> f18[Riwayat Pemakaian]
    f14 --> f19[Pemesanan Kendaraan]
    f19 --> f20[Admin]
    f19 --> f21[Pihak yang Menyetujui]
    f21 --> f22[Pihak 1]
    f21 --> f23[Pihak 2]
    f19 --> f24[Driver]
    f14 --> f25[Dashboard]
    f25 --> f26[Grafik Pemakaian Kendaraan]
    f19 --> f27[Laporan Periodik]
  end

  subgraph ApprovalHierarchy
    f29[Persetujuan]
    f29 --> f30[Level 1]
    f30 --> f31[Level 2]
  end

  f20 -->|Input Pemesanan| f19
  f20 -->|Menentukan Driver| f24
  f20 -->|Menyetujui Pemesanan| f21
  f22 -->|Persetujuan| f30
  f23 -->|Persetujuan| f31
```
## Persyaratan 
- Database: MySQL
- PHP Version: 8.2
- Framework: Laravel
### Instalasi
- Clone Repository:
  ```
  git clone https://github.com/nama-username/sistem-pemesanan-kendaraan.git
  ```
- Pindah ke Direktori Proyek:
  ```
  cd sistem-pemesanan-kendaraan
  ```
- Instal Dependency:
  ```
  composer install
  ```
- Salin Berkas .env:
  ```
  cp .env.example .env
  ```
### Konfigurasi .env:

- Buka file .env dan sesuaikan konfigurasi database:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nama_database
  DB_USERNAME=db_monitoring_kendaraan
  DB_PASSWORD=kata_sandi_database
  ```
- Key Aplikasi:
  ```
  php artisan key:generate
  ```
- Jalankan Migrasi dan Seeder:
  ```
  php artisan migrate --seed
  ```
- Jalankan Aplikasi:
  ```
  php artisan serve
  ```
- Buka Aplikasi:
  Akses aplikasi melalui ```http://localhost:8000``` pada browser Anda.
  
### Daftar Pengguna
- Admin
  - email: admin@gmail.com
  - password: 12341234
- Kepala Divisi (Level 2)
  - email: divisi@gmail.com
  - password: 12341234
- Kepala Pusat (Level 1)
  - email: pusat@gmail.com
  - password: 12341234
## Panduan Penggunaan
- Pemesanan Kendaraan
  - Login ke aplikasi menggunakan akun Admin atau Karyawan.
  - Akses halaman "Pemesanan".
  - Isi formulir pemesanan kendaraan dengan informasi yang diperlukan.
  - Simpan Pesanan.
- Persetujuan Pemesanan
  - Login ke aplikasi menggunakan akun Pihak yang Menyetujui.
  - Akses halaman "Pemesanan Kendaraan" atau "Persetujuan Pemesanan".
  - Lihat daftar pemesanan yang menunggu persetujuan.
  - Konfirmasi pemesanan untuk user dengan level 2.
  - Setujui pemesanan untuk user dengan level 1.
- Manajemen Kendaraan
  - Login ke aplikasi menggunakan akun Admin.
  - Akses halaman "Manajemen Kendaraan".
  - Tambahkan dan lihat detail informasi kendaraan.
- Laporan dan Grafik
  - Akses halaman "Laporan".
  - Lihat laporan pemesanan.
