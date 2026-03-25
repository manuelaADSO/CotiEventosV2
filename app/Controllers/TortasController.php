<?php

namespace App\Controllers;

use App\Core\Controller;

class TortasController extends Controller
{

    // Página principal
    public function index()
    {
        $this->render('tortas/principal');
    }


    // Mostrar torta
    public function show($torta)
    {
        $archivosPermitidos = [
            'grados',
            'cumple',
            'xv',
            'boda',
            'bautizo',
            'babyshowers'
        ];

        if (!in_array($torta, $archivosPermitidos)) {
            echo "404 - Torta no válida";
            return;
        }

        $ruta = "tortas/$torta";
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Archivo de torta no encontrado";
        }
    }

}