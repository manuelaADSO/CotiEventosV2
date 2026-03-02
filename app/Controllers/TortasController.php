<?php

namespace App\Controllers;

use App\Core\Controller;

class TortasController extends Controller
{
    public function index()
    {
        $this->render('tortas/principal');
    }
}