<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajesgradosController extends Controller
{
    public function index()
    {
        $this->render('trajesgrados/grados');
    }
}