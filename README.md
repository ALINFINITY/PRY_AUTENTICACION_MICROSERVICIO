<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Examen parcial práctico

Microservicio de autenticacion.

## Integrantes

Quilumbaquin Pillisa Alan David

# Instalación y Uso

### Usuarios externos con permisos en el repositorio

`vdcriollo@espe.edu.ec` 

### 1. Clonar el repositorio

`
    git clone https://github.com/ALINFINITY/PRY_AUTENTICACION_MICROSERVICIO 
    
    cd PRY_AUTENTICACION_MICROSERVICIO
`
### 2. Instalar dependencias
`
    composer install
`

### 3. Configurar el entorno
`
    cp .env.example .env

    Editar el archivo .env con los parámetros correspondientes:
`

    DB_CONNECTION=mysql
    DB_HOST=Tu host
    DB_PORT=3306
    DB_DATABASE=db_auth_post
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
`
### 4. Generar la clave de la aplicación
`
    php artisan key:generate
`

### 5. Ejecutar las migraciones
`
    php artisan migrate
`

### 6. Desplegar el servicio
`
    php artisan serve --host ip --port puerto
`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
