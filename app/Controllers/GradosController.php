<?php

namespace App\Controllers;

use App\Core\Controller;

class GradosController extends Controller
{
    public function index()
    {
        $this->render('grados/principal');
    }
}