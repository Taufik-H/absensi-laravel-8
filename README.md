# absensi-laravel-8
#installation
```
git clone https://github.com/Taufik-H/absensi-laravel-8.git
```
```
cd absensi-laravel-8
```
```
composer install
```
### Install ui
```
composer require laravel/ui
```
```
npm install
```
```
npm run dev
```
### Konfigurasi Aplikasi
```
cp .example.env .env
```
```
untuk windows kode cp atau copy tidak bisa digunakan maka step ini bisa dilakukan dengan cara :
copy file ```.env.example``` dan rename ke ```.env```
<br>
buat database di localhost lalu
ganti DB_DATABASE=laravel di file .env sesuai database yang kamu buat

```
php artisan key:generate
```


```
php artisan migrate
```
masuk ke localhost buka dan isi tabel jurusan & kelas

### uji aplikasi
```
php artisan serve
```
copy url di cmd  http://127.0.0.1:8000
buka di browser

DONE

sisanya tinggal register 
