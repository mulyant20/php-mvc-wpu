# Persiapan
sumber [Membuat Aplikasi MVC dengan PHP #2 Persiapan](https://www.youtube.com/watch?v=t3A4ZtOONRs)

### Direktori
- app
	- controllers
	- core
		- App.php
		- Controller.php
	- models
	- views 
- Public
	- css
	- img
	- js
	- App.php

user hanya dapat membuka yang berada di **Public**, dan **app** berisi inti dari mvc

dalam public file index.php akan memanggil **init.php** kemudian di dalamnya akan memanggil **App.php** dan **Controller.php** yang berada dalam folder core