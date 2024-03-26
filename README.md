
# CerdasHukum Solusi Permasalahan Hukum Perdata
![Kampus Inovatif Logo](https://github.com/KMIPN-2024/CerdasHukum/blob/main/public/assets/img/cerdashukum-logo.png)



## Cara Install
Untuk menjalankan aplikasi, jalankan perintah dibawah menggunakan terminal

Clone repository ke komputer
```bash
  git clone https://github.com/KMIPN-2024/CerdasHukum.git
```
Install dependensi dan library
```bash
  composer Install
  npm Install
```
Copy file .env.example, dan generate key. kemudian atur database di file .env
```bash
  cp .env.example .env
  php artisan key:generate
```
Migrasi table database dan seeder
```bash
  php artisan migrate --seed
```
Menjalankan aplikasi
```bash
  php artisan serve
```
```bash
  npm run dev
```