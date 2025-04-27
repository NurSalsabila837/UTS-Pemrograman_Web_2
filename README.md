## Aplikasi Pembayaran SPP

<img src="https://github.com/user-attachments/assets/f30eae02-e20b-4e65-9d95-5ac4161de224" alt="Logo" height="80">

```
NAMA        : Nur Salsabila  <br>
NIM         : 312310344  <br>
KELAS       : TI.23.A4    <br>
MATAKULIAH  : Pemrograman Web2
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

Super Admin
| Username | admin       |
|----------|-------------|
| Password | admin       |

Staff
| Username | stafftu     |
|----------|-------------|
| Password | stafftu     |


## License / Lisensi

.
