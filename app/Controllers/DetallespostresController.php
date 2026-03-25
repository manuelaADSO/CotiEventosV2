<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesPostresController extends Controller
{
    public function show($detalle)
    {
        // Lista de archivos permitidos para postres
        $archivosPermitidos = [
            '01postre',
            '02postre',
            '03postre',
            '04postre',
            '05postre',
            '06postre'
        ];

        // Validar que el archivo exista en la lista
        if (!in_array($detalle, $archivosPermitidos)) {
            echo "404 - Detalle de postre no válido";
            return;
        }

        // Construir ruta relativa a views/detallespostre
        $ruta = "detallespostres/$detalle";

        // Ruta física del archivo
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Archivo de postre no encontrado";
        }
    }
}