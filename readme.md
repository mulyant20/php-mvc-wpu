# Routing
sumber [Membuat Aplikasi MVC dengan PHP #3 Routing](https://www.youtube.com/watch?v=-wBKfa0-yyQ)

### App.php

```php
public function parseUrl() {
    if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}
```
function parseUrl akan mengembalikan array dari url misal jika ingin mengujungi halaman profile dengan id 123 contoh dalam url localhost/php-mvc-wpu`/profile/123` maka akan mengembalikan array yaitu array(2) {"profile","123"}

```php
$url = $this->parseUrl();
```

mengisi variabel `$url` dengan function parseUrl yang mereturn array

### htaccess
merubah konfigurasi di dalam server

    Options -Indexes
digunakan untuk memblok agar user tidak dapat mengakses ke dalam folder **app**

    Options -Multiviews
digunakan untuk agar dapat menghindari kesalahan saat memanggil folder di dalam **public**

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [L]

berikut aturan agar kita tidak perlu menuliskan `index.php?url=value` di dalam url