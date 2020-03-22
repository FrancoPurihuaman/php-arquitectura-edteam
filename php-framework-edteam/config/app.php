<?php

/*Ruta del directorio raiz de la aplicación
 *__DIR__ => Debuelve la ruta del directorio actual
 */
define('APP_PATH', __DIR__.'/..');

//Ruta del directorio publico
define ('PUBLIC_PATH', 'http://localhost/php-framework-edteam');

//Composer
include_once APP_PATH.'/vendor/autoload.php';

//Datos de connección
include_once 'env.php';

//Base de datos
include_once 'database.php';

//Rutas de la app
include_once 'routes.php';

//Nombre de la aplicacion web
define('NOMBRE_SITIO', '_FRAMEWORK-PHP_');