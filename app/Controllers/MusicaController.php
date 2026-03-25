<?php

namespace App\Controllers;

use App\Core\Controller;

class MusicaController extends Controller
{
    // Página principal de música
    public function index()
    {
        $this->render('musica/principal');
    }

    // Mostrar página de cada servicio
    public function servicio($tipo = null)
    {
        $serviciosPermitidos = [
            'dj',
            'banda',
            'efectosespeciales',
            'personalizar'
        ];

        $tipo = strtolower($tipo);

        if (!in_array($tipo, $serviciosPermitidos)) {
            echo "Servicio de música no encontrado";
            return;
        }

        $this->render('musica/' . $tipo . '/principal');
    }

    // Mostrar paquetes del servicio
    public function paquete($tipo = null, $paquete = null)
    {
        $paquetesPorServicio = [
            'dj' => ['basico','fiesta','premium','premiumplus','vip','fullevento'],
            'banda' => ['esencial','fiesta','show','premium','vip','espectaculototal'],
            'efectosespeciales' => ['basico','fiesta','premium','premiumplus','vip','total'],
            'personalizar' => ['basico','fiesta','premium','premiumplus','vip','total']
        ];

        $tipo = strtolower($tipo);
        $paquete = strtolower($paquete);

        // Validar servicio
        if (!isset($paquetesPorServicio[$tipo])) {
            echo "Servicio no encontrado";
            return;
        }

        // Validar paquete
        if (!in_array($paquete, $paquetesPorServicio[$tipo])) {
            echo "Paquete no disponible para este servicio";
            return;
        }

        // Renderizar vista
        $this->render('musica/' . $tipo . '/' . $paquete);
    }
}