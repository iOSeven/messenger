<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Requisitos previos
1.- php 7.1
2.- MySql o MariaDb
3.- Xampp (ya contiene los 2 sistemas anteriores) <a href="https://www.apachefriends.org/es/index.html">Aquí</a>
4.- Node.js <a href="https://nodejs.org/es/download/">Aquí</a>
5.- Npm <a href="https://docs.npmjs.com/cli/install">Aquí</a>
6.- Una cuenta con un api en pusher <a href="https://pusher.com/">Aquí</a>

## Implementación del módulo

1.- Se debe descargar el proyecto en la carpeta <Publica> de tu servidor local

2.- Una vez finalizada la descargar deberas acceder por consola a la carpeta que se acaba de crear

3.- Dentro de la carpeta se debe generar el archivo .env con la conexion a una BD en blanco

4.- Ubicar en el archivo env. la siguiente linea y reemplazarla por el siguiente código

BROADCAST_DRIVER=log -> Anterior

BROADCAST_DRIVER=pusher -> Nuevo

5.- Ubicar en el archivo env. el siguiente código al final y reemplazarlo con los datos del api que se creo anterior mente en pusher

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

Nota : en caso de no conocer el uso de pusher usar los datos genericos sig., esta api es mia la dejare activa a modo de ejemplo, para implementar en un proyecto nuevo se debe crear un api nueva por proyecto.

PUSHER_APP_ID=595326
PUSHER_APP_KEY=131078b213a6f8ac58a8
PUSHER_APP_SECRET=5f297bcc089ae2bb71fe
PUSHER_APP_CLUSTER=us2

6.- Ubicarse en el terminal o consola y ejecutar los siguientes comando en este orden

a) composer install
b) npm install

c) php artisan key:generate
d) php artisan migrate
e) php artisan migrate:refresh --seed
f) php artisan serve