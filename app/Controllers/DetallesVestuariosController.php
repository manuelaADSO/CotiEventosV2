<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesVestuariosController extends Controller
{
    public function show($evento, $tipo, $detalle)
    {
        // Eventos permitidos
        $eventosPermitidos = [
            'xv',
            'cumple',
            'grados',
            'boda',
            'bautizo',
            'babyshowers'
        ];

        // Tipos permitidos
        $tiposPermitidos = [
            'vestidos',
            'trajes',
            'nino',
            'nina',
            'mama'
        ];

        // Validar evento
        if (!in_array($evento, $eventosPermitidos)) {
            echo "404 - Evento no válido";
            return;
        }

        // Validar tipo
        if (!in_array($tipo, $tiposPermitidos)) {
            echo "404 - Tipo de vestuario no válido";
            return;
        }

        // Construir ruta
        $ruta = "detallesvestuarios/$evento/$tipo/$detalle";

        // Ruta física del archivo
        $archivo = __DIR__ . "/../Views/$ruta.php";

        if (file_exists($archivo)) {
            $this->render($ruta);
        } else {
            echo "404 - Vestuario no encontrado";
        }
    }
}