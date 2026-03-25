<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesCoctelesController extends Controller
{
    public function show($detalle)
    {
        // Cocteles permitidos
        $coctelesPermitidos = [
            '01coctel',
            '02coctel',
            '03coctel',
            '04coctel',
            '05coctel',
            '06coctel'
        ];

        if (!in_array($detalle, $coctelesPermitidos)) {
            echo "404 - Coctel no válido";
            return;
        }

        // Ruta dentro de views
        $ruta = "detallescocteles/$detalle";

        // Ruta física
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Archivo de coctel no encontrado";
        }
    }
}