<?php

namespace App\Controllers;

use App\Core\Controller;

class FotografiaController extends Controller
{
    // Página principal de fotografía
    public function index()
    {
        $this->render('fotografia/principal');
    }

    // Mostrar página de cada evento
    public function evento($tipo = null)
    {
        $eventosPermitidos = [
            'grados',
            'xv',
            'boda',
            'cumple',
            'bautizo',
            'babyshowers'
        ];

        $tipo = strtolower($tipo);

        if (!in_array($tipo, $eventosPermitidos)) {
            echo "Evento no encontrado";
            return;
        }

        $this->render('fotografia' . DIRECTORY_SEPARATOR . $tipo . DIRECTORY_SEPARATOR . 'principal');
    }

    // Mostrar paquetes específicos de cada evento
    public function paquete($tipo = null, $paquete = null)
    {
        // Paquetes válidos por evento
        $paquetesPorEvento = [
            'boda' => ['basico', 'premium', 'vip'],
            'xv' => ['basico', 'premium', 'vip'],
            'cumple' => ['basico', 'premium', 'vip'],
            'grados' => ['tradicional', 'profesional','elite'],
            'bautizo' => ['basico', 'premium','vip'],
            'babyshowers' => ['basico', 'premium','vip']
        ];

        // Forzar minúsculas
        $tipo = strtolower($tipo);
        $paquete = strtolower($paquete);

        // Validar evento
        if (!isset($paquetesPorEvento[$tipo])) {
            echo "Evento no encontrado";
            return;
        }

        // Validar paquete
        if (!in_array($paquete, $paquetesPorEvento[$tipo])) {
            echo "Paquete no disponible para este evento";
            return;
        }

        // Construir la ruta de la vista usando DIRECTORY_SEPARATOR
        $rutaArchivo = dirname(__DIR__)   // sube 1 nivel desde Controllers -> App
    . DIRECTORY_SEPARATOR . 'views'
    . DIRECTORY_SEPARATOR . 'fotografia'
    . DIRECTORY_SEPARATOR . $tipo
    . DIRECTORY_SEPARATOR . $paquete . '.php';

        // Verificar que exista
        if (!file_exists($rutaArchivo)) {
            echo "Paquete no encontrado. PHP buscó en: $rutaArchivo";
            return;
        }

        // Renderizar
        $rutaVista = 'fotografia/' . $tipo . '/' . $paquete; // esta es la ruta para el render interno
        $this->render($rutaVista);
    }
}