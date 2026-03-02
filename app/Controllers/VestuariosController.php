<?php

namespace App\Controllers;

use App\Core\Controller;

class VestuariosController extends Controller
{
    public function index()
    {
        $this->render('vestuarios/listar_grados');
    }
}