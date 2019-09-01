# Zenziva sms

Integrasi API zenziva sms 

## Instalasi

Gunakan package manager [composer](https://pip.pypa.io/en/stable/) Untuk menginstal package zenziva sms.

```bash
composer require rizkymiff/zenziva-sms
```

## Cara agar package bisa berjalan
Tambahkan pada bagian provider di config/app.php
```php
'providers' => [
     ....
     rizkymiff\zenzivasms\ZenzivaServiceProvider::class,
]
```
Tambahkan juga pada bagian di config/app.php
```php
'aliases' => [
     ....
     rizkymiff\zenzivasms\zenzivaFacade::class,
]
```
kemudian jalankan artisan command
```bash
php artisan vendor/publish
```
Tambahkan kode berikut pada file .env untuk konfigurasi API Zenziva sms
```env
ZENZIVA_USERKEY=USERKEY_ANDA
ZENZIVA_PASSKEY=PASSKEY_ANDA
```
## Penggunaan

## License
[MIT](https://choosealicense.com/licenses/mit/)
