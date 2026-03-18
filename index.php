<?php
define('BASE_URL','/cotieventosV2');

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\CoctelesController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\EventosController;
use App\Controllers\GaleriaController;
use App\Controllers\ContactosController;
use App\Controllers\CumpleController;
use App\Controllers\DetallescoctelesController;
use App\Controllers\DetallesmenuController;
use App\Controllers\DetallespostresController;
use App\Controllers\DetallestortasController;
use App\Controllers\DetallestortasgradosController;
use App\Controllers\DetallesVestuariosController;
use App\Controllers\FotografiaController;
use App\Controllers\GradosController;
use App\Controllers\GraduacionController;
use App\Controllers\MenuController;
use App\Controllers\MusicaController;
use App\Controllers\PlatillosController;
use App\Controllers\PostresController;
use App\Controllers\TortasController;
use App\Controllers\TortasgradosController;
use App\Controllers\TrajesController;
use App\Controllers\TrajescumpleController;
use App\Controllers\TrajesgradosController;
use App\Controllers\TrajesninocumpleController;
use App\Controllers\TrajesninoxvController;
use App\Controllers\TrajesxvController;
use App\Controllers\VestidosController;
use App\Controllers\VestidoscumpleController;
use App\Controllers\VestidosgradosController;
use App\Controllers\VestidosmamaxvController;
use App\Controllers\VestidosninacumpleController;
use App\Controllers\VestidosninaxvController;
use App\Controllers\VestidosxvController;
use App\Controllers\VestuariosController;
use App\Controllers\VestuarioscumpleController;
use App\Controllers\VestuariosgradosController;
use App\Controllers\VestuariosxvController;
use App\Controllers\XVController;
use Dotenv\Dotenv;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Crear router
$router = new Router();

// ===================
// Rutas principales
// ===================
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

$router->get('/grados', function () {
    $controller = new GradosController();
    $controller->index();
});

// ===================
// Rutas de Vestuarios/Trajes/Vestidos Grados
// ===================
$router->get('/vestuariosgrados', function () {
    $controller = new VestuariosgradosController();
    $controller->index();
});

$router->get('/vestidosgrados', function () {
    $controller = new VestidosgradosController();
    $controller->index();
});

$router->get('/trajesgrados', function () {
    $controller = new TrajesgradosController();
    $controller->index();
});

$router->get('/detallegrados', function () {
    $controller = new PlatillosController();
    $controller->index();
});

$router->get('/platillos', function () {
    $controller = new PlatillosController();
    $controller->index();
});

// ===================
// Ruta de  menu
// ===================
$router->get('/menu', function () {
    $controller = new MenuController();
    $controller->index();
});

// ===================
// Ruta de  postres
// ===================
$router->get('/postres', function () {
    $controller = new PostresController();
    $controller->index();
});

// ===================
// Ruta de cocteles
// ===================
$router->get('/cocteles', function () {
    $controller = new CoctelesController();
    $controller->index();
});

// ===================
// Rutas de detallesmenu
// ===================
$controller = new \App\Controllers\DetallesMenuController();

// Menús disponibles
$menus = [
    '01menu',
    '02menu',
    '03menu',
    '04menu',
    '05menu',
    '06menu'
];

// Ruta principal (opcional)
$router->get('/detallesmenu', function () use ($controller) {
    $controller->show('01menu'); // menú por defecto
});

// Rutas de cada menú
foreach ($menus as $menu) {
    $router->get('/detallesmenu/' . $menu, function () use ($controller, $menu) {
        $controller->show($menu);
    });
}

// ===================
// Rutas de detallespostres
// ===================
$controller = new \App\Controllers\DetallesPostresController();

$postres = [
    '01postre',
    '02postre',
    '03postre',
    '04postre',
    '05postre',
    '06postre'
];

// Ruta principal
$router->get('/detallespostres', function () use ($controller) {
    $controller->show('01postre');
});

// Rutas de cada postre
foreach ($postres as $postre) {
    $router->get('/detallespostres/' . $postre, function () use ($controller, $postre) {
        $controller->show($postre);
    });
} 

// ===================
// Rutas de detallestortas
// ===================
$controller = new \App\Controllers\DetallesTortasController();

// Eventos (carpetas)
$eventos = [
    'cumple',
    'boda',
    'xv',
    'bautizo',
    'babyshowers',
    'grados'
];

// Tortas disponibles
$tortas = [
    '01torta',
    '02torta',
    '03torta',
    '04torta',
    '05torta',
    '06torta'
];

// Ruta principal (opcional)
$router->get('/detallestortas', function () use ($controller) {
    $controller->show('cumple', '01torta'); // torta por defecto
});

// Generar rutas automáticamente
foreach ($eventos as $evento) {
    foreach ($tortas as $torta) {

        $router->get('/detallestortas/' . $evento . '/' . $torta, function () use ($controller, $evento, $torta) {
            $controller->show($evento, $torta);
        });

    }
}
// ===================
// Rutas de detallescocteles
// ===================
$controller = new \App\Controllers\DetallesCoctelesController();

$cocteles = [
    '01coctel',
    '02coctel',
    '03coctel',
    '04coctel',
    '05coctel',
    '06coctel'
];

// Ruta principal
$router->get('/detallescocteles', function () use ($controller) {
    $controller->show('01coctel');
});

// Rutas de cada coctel
foreach ($cocteles as $coctel) {
    $router->get('/detallescocteles/' . $coctel, function () use ($controller, $coctel) {
        $controller->show($coctel);
    });
}

// ===================
// Rutas de tortas
// ===================
$controller = new \App\Controllers\TortasController();

$tortas = [
    'grados',
    'cumple',
    'xv',
    'boda',
    'bautizo',
    'babyshowers'
];

// Página principal
$router->get('/tortas', function () use ($controller) {
    $controller->index();
});

// Rutas de cada tipo de torta
foreach ($tortas as $torta) {
    $router->get('/tortas/' . $torta, function () use ($controller, $torta) {
        $controller->show($torta);
    });
}

// ===================
// Rutas de musica
// ===================

$controller = new MusicaController();

// Página principal
$router->get('/musica', function () use ($controller) {
    $controller->index();
});

$paquetesPorServicio = [
    'dj' => ['basico','fiesta','premium','premiumplus','vip','fullevento'],
    'banda' => ['esencial','fiesta','show','premium','vip','espectaculototal'],
    'efectosespeciales' => ['basico','fiesta','premium','premiumplus','vip','total'],
    'personalizar' => ['basico','fiesta','premium','premiumplus','vip','total']
];

foreach ($paquetesPorServicio as $servicio => $paquetes) {

    // página del servicio
    $router->get('/musica/' . $servicio, function () use ($controller, $servicio) {
        $controller->servicio($servicio);
    });

    // paquetes
    foreach ($paquetes as $paquete) {
        $router->get('/musica/' . $servicio . '/' . $paquete, function () use ($controller, $servicio, $paquete) {
            $controller->paquete($servicio, $paquete);
        });
    }
}

// ===================
// Rutas Fotografía (controlador único)
// ===================
$controller = new FotografiaController();

// Ruta principal
$router->get('/fotografia', function () use ($controller) {
    $controller->index();
});

// Definir paquetes válidos por evento
$paquetesPorEvento = [
    'boda' => ['basico','premium','vip'],
    'xv' => ['basico','premium','vip'],
    'cumple' => ['basico','premium','vip'],
    'grados' => ['tradicional','profesional','elite'],
    'bautizo' => ['basico','premium','vip'],
    'babyshowers' => ['basico','premium','vip']
];

// Rutas por evento y sus paquetes
foreach ($paquetesPorEvento as $evento => $paquetes) {
    // Página principal del evento
    $router->get('/fotografia/' . $evento, function () use ($controller, $evento) {
        $controller->evento($evento);
    });

    // Rutas de cada paquete válido para este evento
    foreach ($paquetes as $paquete) {
        $router->get('/fotografia/' . $evento . '/' . $paquete, function () use ($controller, $evento, $paquete) {
            $controller->paquete($evento, $paquete);
        });
    }
}
// ===================
// Rutas Cumple/XV
// ===================
$router->get('/cumple', function () {
    $controller = new CumpleController();
    $controller->index();
});

$router->get('/xv', function () {
    $controller = new XVController();
    $controller->index();
});

$router->get('/vestuarioscumple', function () {
    $controller = new VestuarioscumpleController();
    $controller->index();
});

$router->get('/vestidoscumple', function () {
    $controller = new VestidoscumpleController();
    $controller->index();
});

$router->get('/trajescumple', function () {
    $controller = new TrajescumpleController();
    $controller->index();
});

$router->get('/trajesninocumple', function () {
    $controller = new TrajesninocumpleController();
    $controller->index();
}); 

$router->get('/vestidosninacumple', function () {
    $controller = new VestidosninacumpleController();
    $controller->index();
});

$router->get('/vestuariosxv', function () {
    $controller = new VestuariosxvController();
    $controller->index();
});

$router->get('/vestidosxv', function () {
    $controller = new VestidosxvController();
    $controller->index();
});

$router->get('/vestidosmamaxv', function () {
    $controller = new VestidosmamaxvController();
    $controller->index();
});

$router->get('/vestidosninaxv', function () {
    $controller = new VestidosninaxvController();
    $controller->index();
});

$router->get('/trajesninoxv', function () {
    $controller = new TrajesninoxvController();
    $controller->index();
});

$router->get('/trajesxv', function () {
    $controller = new TrajesxvController ();
    $controller->index();
});

// ===================
// Rutas detalles vestuarios
// ===================
$controller = new DetallesVestuariosController();

// Array de vestuarios por evento y tipo
$vestuarios = [

    'boda' => [
        'vestidos' => ['princesa','elegante','clasico'],
        'trajes' => ['moderno','clasico'],
        'mama' => ['elegante']
    ],

    'xv' => [
        'vestidos' => ['imperio','asimetrico','encaje','brillo'],
        'nina' => ['corto','brillo','floral','princesa'],
        'mama' => ['elegante','brillo','floral','moderno'],
        'nino' => ['caballero','divertido','moderno','semiformal'],
        'trajes' => ['azul','marfil','satinado','tirantes']
    ],

    'cumple' => [
        'vestidos' => ['fiesta','corto','largo','capas'],
        'trajes' => ['casual','jeans','contemporaneo','semiformal'],
        'nino' => ['elegante','aventura','vaquero','principe'],
        'nina' => ['princesa','unicornio','floral','brillo']
    ],

    'grados' => [
        'trajes' => ['azul','gris','negro','blazer'],
        'vestidos' => ['largo','corto','straple','una_manga']
    ],

    'bautizo' => [
        'nino' => ['clasico','blanco'],
        'nina' => ['angel','blanco']
    ],

    'babyshowers' => [
        'mama' => ['comodo','elegante']
    ]

];

// Generar dinámicamente las rutas
foreach ($vestuarios as $evento => $tipos) {
    foreach ($tipos as $tipo => $detalles) {
        foreach ($detalles as $detalle) {
            $router->get('/detallesvestuarios/'.$evento.'/'.$tipo.'/'.$detalle, function() use ($controller, $evento, $tipo, $detalle) {
                $controller->show($evento, $tipo, $detalle);
            });
        }
    }
}
// ===================
// Ejecutar router
// ===================
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);