<?php

namespace App\Controllers;

use App\Core\Controller;

class DetallescoctelesController extends Controller
{
    public function index()
    {
        $this->render('detalle_cocteles/01_coctel');
    }
}