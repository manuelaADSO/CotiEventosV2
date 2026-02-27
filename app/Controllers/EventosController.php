<?php

namespace App\Controllers;

use App\Core\Controller;

class EventosController extends Controller
{
    public function index()
    {
        $this->render('eventos');
    }
}