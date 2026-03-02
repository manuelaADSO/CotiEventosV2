<?php

namespace App\Controllers;

use App\Core\Controller;

class GraduacionController extends Controller
{
    public function index()
    {
        $this->render('graduacion/principal');
    }
}