<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallestortasController extends Controller
{
    public function index()
    {
        $this->render('detalles_tortas/');
    }
}