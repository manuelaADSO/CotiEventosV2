<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesTortasController extends Controller
{
    public function show($evento, $detalle)
    {
        // Eventos permitidos (carpetas)
        $eventosPermitidos = [
            'cumple',
            'boda',
            'xv',
            'bautizo',
            'babyshowers',
            'grados'
        ];

        // Archivos permitidos
        $archivosPermitidos = [
            '01torta',
            '02torta',
            '03torta',
            '04torta',
            '05torta',
            '06torta'
        ];

        // Validar evento
        if (!in_array($evento, $eventosPermitidos)) {
            echo "404 - Evento de torta no válido";
            return;
        }

        // Validar archivo
        if (!in_array($detalle, $archivosPermitidos)) {
            echo "404 - Detalle de torta no válido";
            return;
        }

        // Ruta relativa a views
        $ruta = "detallestortas/$evento/$detalle";

        // Ruta física del archivo
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Archivo de torta no encontrado";
        }
    }
}