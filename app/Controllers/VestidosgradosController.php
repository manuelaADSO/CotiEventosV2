<?php

namespace App\Controllers;

use App\Core\Controller;

class VestidosgradosController extends Controller
{
    public function index()
    {
        $this->render('vestidosgrados/grados');
    }
}