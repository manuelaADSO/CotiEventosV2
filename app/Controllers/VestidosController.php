<?php

namespace App\Controllers;

use App\Core\Controller;

class VestidosController extends Controller
{
    public function index()
    {
        $this->render('vestidos/listar_grados');
        $this->render('vestidos/listar_cumple');
        $this->render('vestidos/listar_xv');
    }
}