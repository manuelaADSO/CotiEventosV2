<?php

namespace App\Controllers;

use App\Core\Controller;

class PlatillosController extends Controller
{
    public function index()
    {
        $this->render('platillos/principal');
    }
}