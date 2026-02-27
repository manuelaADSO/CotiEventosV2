<?php

namespace App\Controllers;

use App\Core\Controller;

class GaleriaController extends Controller
{
    public function index()
    {
        $this->render('galeria');
    }
}