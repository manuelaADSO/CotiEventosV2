<?php
define('BASE_URL','/cotieventosV2');

require_once __DIR__ . '/vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\EventosController;
use App\Controllers\GaleriaController;
use App\Controllers\ContactosController;
use Dotenv\Dotenv;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Crear router
$router = new Router();

// Definir rutas
$router->get('/', function () {
    $controller = new HomeController();
    $controller->index();
});

$router->get('/eventos', function () {
    $controller = new EventosController();
    $controller->index();
});

$router->get('/galeria', function () {
    $controller = new GaleriaController();
    $controller->index();
});

$router->get('/contactos', function () {
    $controller = new ContactosController();
    $controller->index();
});

// Ejecutar router
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);