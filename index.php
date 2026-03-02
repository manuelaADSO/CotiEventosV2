<?php
define('BASE_URL','/cotieventosV2');

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\CoctelesController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\EventosController;
use App\Controllers\GaleriaController;
use App\Controllers\ContactosController;
use App\Controllers\DetallescoctelesController;
use App\Controllers\DetallesmenuController;
use App\Controllers\DetallespostresController;
use App\Controllers\DetallestortasController;
use App\Controllers\DetallesVestuariosController;
use App\Controllers\FotografiaController;
use App\Controllers\GraduacionController;
use App\Controllers\MenuController;
use App\Controllers\MusicaController;
use App\Controllers\PlatillosController;
use App\Controllers\PostresController;
use App\Controllers\TortasController;
use App\Controllers\TrajesController;
use App\Controllers\VestidosController;
use App\Controllers\VestuariosController;
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

$router->get('/graduacion', function () {
    $controller = new GraduacionController();
    $controller->index();
});


$router->get('/vestuarios', function () {
    $controller = new VestuariosController();
    $controller->index();
});

$router->get('/vestidos', function () {
    $controller = new VestidosController();
    $controller->index();
});

$router->get('/trajes', function () {
    $controller = new TrajesController();
    $controller->index();
});

$router->get('/detallesvestuarios/{evento}/{tipo}/{detalle}', function ($evento, $tipo, $detalle) { 
    $controller = new DetallesVestuariosController(); 
    $controller->show($evento, $tipo, $detalle); 
});

$router->get('/platillos', function () {
    $controller = new PlatillosController();
    $controller->index();
});


$router->get('/menu', function () {
    $controller = new MenuController();
    $controller->index();
});

$router->get('/postres', function () {
    $controller = new PostresController();
    $controller->index();
});

$router->get('/tortas', function () {
    $controller = new TortasController();
    $controller->index();
});

$router->get('/cocteles', function () {
    $controller = new CoctelesController();
    $controller->index();
});

$router->get('/detalles_menu', function () {
    $controller = new DetallesmenuController();
    $controller->index();
});


$router->get('/detalles_postres', function () {
    $controller = new DetallespostresController();
    $controller->index();
}); 

$router->get('/detalles_tortas', function () {
    $controller = new DetallestortasController();
    $controller->index();
});

$router->get('/detalles_cocteles', function () {
    $controller = new DetallescoctelesController();
    $controller->index();
});

$router->get('/musica', function () {
    $controller = new MusicaController();
    $controller->index();
});

$router->get('/fotografia', function () {
    $controller = new FotografiaController();
    $controller->index();
});

// Ejecutar router
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);