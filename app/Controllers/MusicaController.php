<?php

namespace App\Controllers;

use App\Core\Controller;

class MusicaController extends Controller
{
    public function index()
    {
        $this->render('musica/principal');
    }
}