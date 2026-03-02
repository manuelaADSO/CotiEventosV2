<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallespostresController extends Controller
{
    public function index()
    {
        $this->render('detalles_postres/01_postre');
    }
}