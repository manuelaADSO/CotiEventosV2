<?php

namespace App\Controllers;

use App\Core\Controller;

class VestuariosgradosController extends Controller
{
    public function index()
    {
        $this->render('vestuariosgrados/grados');
    }
}