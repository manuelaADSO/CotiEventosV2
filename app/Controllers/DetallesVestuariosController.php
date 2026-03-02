<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesVestuariosController extends Controller
{
   public function show($evento, $tipo, $detalle)
    {
        $ruta = "detallesvestuarios/$evento/$tipo/$detalle";

        $this->render($ruta);
    }
}