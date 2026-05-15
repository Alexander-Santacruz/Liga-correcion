<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Liga

Proyecto base construido con Laravel para gestionar informacion de una liga de futbol.

## Modulos disponibles

- Equipos
- Jugadores
- Partidos
- Goles
- Presidentes

## Rutas principales

- `/teams`
- `/teams-presidents`
- `/teams-players`
- `/teams-games`
- `/players`
- `/players-teams`
- `/players-goals`
- `/games`
- `/games-teams`
- `/games-goals`
- `/goals`
- `/goals-players`
- `/goals-games`
- `/presidents`
- `/presidents-teams`

## Inicio rapido

1. Instala dependencias con `composer install`.
2. Crea el archivo `.env` a partir de `.env.example`.
3. Genera la clave con `php artisan key:generate`.
4. Configura la base de datos.
5. Ejecuta migraciones con `php artisan migrate`.
6. Levanta el servidor con `php artisan serve`.
