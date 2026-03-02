<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallesmenuController extends Controller
{
    public function index()
    {
        $this->render('detalle_menu/01_menu');
    }
}