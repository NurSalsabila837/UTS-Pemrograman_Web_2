<p align="center">
  <h2>Aplikasi Pembayaran SPP di SMK BRAHARI</h2>
</p>


<div align="center">
  <img src="https://github.com/user-attachments/assets/57fb1295-ce68-482b-8a73-f9bd5a5608d5" alt="Logo 1" height="150">
  &nbsp;&nbsp;&nbsp;
  <img src="https://github.com/user-attachments/assets/f30eae02-e20b-4e65-9d95-5ac4161de224" alt="Logo 2" height="150">
</div>

```
NAMA        : Nur Salsabila
NIM         : 312310344
KELAS       : TI.23.A4
MATAKULIAH  : Pemrograman Web 2
```

## Installation / Instalasi
Pastikan versi php Anda telah mendukung Laravel 10. Setelah repo ini diclone, bukalah CLI dan posisikan direktori aktif ke repo ini.

### Manual Setup
Jalankan perintah berikut untuk menginstal dependensi php
```
composer install
```
Jalankan perintah berikut untuk mengatur _environment variable_
```
cp .env.example .env
```
Pastikan Anda telah membuat database baru di MySQL dan silakan sesuaikan file `.env` dengan database Anda (harus membuat database-nya terlebih dahulu).
Jalankan perintah berikut untuk membuat _key_ untuk web app Anda
```
php artisan key:generate
```
Jalankan perintah berikut untuk menghubungkan folder public Anda dengan storage
```
php artisan storage:link
```
Jalankan perintah berikut untuk membuat skema database
```
php artisan migrate --seed
```
Kemudian jalankan perintah berikut
```
npm install && npm run build
```
Terakhir, jalankan perintah berikut untuk menyalakan web server bawaan laravel
```
php artisan serve
```
Setelah perintah di atas dijalankan, web app Anda bisa sudah bisa diakses

## Login
Untuk login aplikasi silakan masukkan username dan password berikut

### Super Admin
| Username | admin       |
|----------|-------------|
| Password | admin       |

### Staff
| Username | stafftu     |
|----------|-------------|
| Password | stafftu     |


## License / Lisensi
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

© 2025 Nur Salsabila. All rights reserved.
