<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.prosys.cl/wp-content/uploads/2019/10/marca-grafica-prosys.png" width="400"></a></p>

## Base PROSYS Laravel 8

Paquetes composer incluidos:

- [Laravel Chile](https://github.com/davidvegacl/laravel-chile).
- [Laravel Flow](https://github.com/davidvegacl/laravel-flow).
- [Sweet Alert](https://github.com/realrashid/sweet-alert).
- [Email database log](https://github.com/shvetsgroup/laravel-email-database-log).
- [Permisos Spatie](https://github.com/spatie/laravel-permission).

Paquetes npm incluidos:

- [SB admin-2](https://startbootstrap.com/theme/sb-admin-2).
- [Iconos FontAwesome Free](https://startbootstrap.com/theme/sb-admin-2).


## Comandos de instalación y configuración inicial

- ```composer install```
- ```npm install```
- ```npm run dev```
- **Copiar archivo .env.example a .env en / y añadir los valores de configuración faltantes**
- **Copiar .htaccess.example a .htaccess en la carpeta /public**
- **Revisar migraciones y seeders**
- ```php artisan migrate:fresh --seed```


## Información sobre paquetes añadidos

- Se incluye un usuario declarado en UsuarioSeeder, con permiso de administración. Este permiso se debe trabajar mediante Spatie y Middlewares. 

## A considerar

- Con respecto a páginas de errores, como mínimo deben personalizarse las páginas 404 y 502, ambas ya publicadas en ~/resources/views/errors
- Considerar añadir Google Analytics
- Generar archivo robots.txt antes de pasar a producción
