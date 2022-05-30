
# Gestión de Citas Medicas de una Clinica - BackEnd

Sistema de Información para la gestión de citas medicas

### Requerimientos

* PHP >= 8.0.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* MySQL >= 5.7.*
* <a href="https://getcomposer.org/">Composer</a>

### Instalación

El proyecto esta desarrollado en [Laravel 9](https://laravel.com/docs/9.x/)

```sh
 "Los puntos con simbolo ($) son comandos desde consola"
 
1- Clonar proyecto 

2- Hacer Pull con la rama master
   (rama la cual se trabajara en el proyecto)
   
3- $ composer install  

4- Copiar el archivo .env.example 
   (.env - copia.example) y cambiar el nombre a .env 
   
5- Dejar la configuracion DB de developer
   ejemplo
   
   DB_HOST_DEVELOPER=127.0.0.1
   DB_DATABASE_DEVELOPER=clinica_api
   DB_USERNAME_DEVELOPER=root
   DB_PASSWORD_DEVELOPER=123

6- Crear la base de datos con el respectivo nombre asignado en .env	
   y configurar el archivo .env 
   ejemplo
   
   clinica_api
   
7- $ php artisan key:generate
8- $ php artisan storage:link
9- Migrar las bases de datos de biblioteca.
   
    $ php artisan migrate
    
 
```

### Herramientas
* <a href="https://education.github.com/pack">GitHub Student Pack</a>
* <a href="https://www.gitkraken.com/">GitKraken</a>
* <a href="http://codeship.com/">Codeship, pruebas de integración contínua</a>



### Material de Apoyo
* <a href="https://styde.net/">Styde</a>
* <a href="https://laravel.com/docs/9.x/sanctum">Laravel Sanctum</a>
* <a href="https://laravel.com/docs/9.x/">Documentación Laravel 9</a>
* <a href="https://wkhtmltopdf.org/downloads.html">Binarios Snappy</a>
* <a href="https://github.com/MicrosoftArchive/redis/releases">Redis Windows</a>
* <a href="https://nodejs.org/en/">Node.js</a>
