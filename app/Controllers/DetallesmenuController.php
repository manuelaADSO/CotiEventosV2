<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesMenuController extends Controller
{
    public function show($detalle)
    {
        // Opcional: lista de archivos permitidos
        $archivosPermitidos = [
            '01menu',
            '02menu',
            '03menu',
            '04menu',
            '05menu',
            '06menu'
        ];

        // Validar que el archivo exista en la lista
        if (!in_array($detalle, $archivosPermitidos)) {
            echo "404 - Detalle de menú no válido";
            return;
        }

        // Construir ruta relativa a views/detallesmenu
        $ruta = "detallesmenu/$detalle";

        // Ruta física del archivo
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Archivo de menú no encontrado";
        }
    }
}