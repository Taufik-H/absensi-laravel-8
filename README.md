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
php artisan ui react
```
```
npm install
```
```
npm run dev
```
### Konfigurasi Aplikasi
```
cp .env.example .env
```
untuk windows kode cp atau copy tidak bisa digunakan maka step ini bisa dilakukan dengan cara :
copy file ```.env.example``` dan rename ke ```.env```
<br>
buat database di localhost lalu
ganti  DB_DATABASE=`laravel`  di file .env sesuai nama database yang kamu buat

```
php artisan key:generate
```


```
php artisan migrate
```
```
php artisan db:seed
```

### uji aplikasi
```
php artisan serve
```
copy url di cmd  http://127.0.0.1:8000
buka di browser

DONE

Login :
email    = ```admin@gmail.com```
password = ```admin1234```
