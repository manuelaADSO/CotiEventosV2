<?php

namespace App\Controllers;

use App\Core\Controller;

class CumpleController extends Controller
{
    public function index()
    {
        $this->render('cumple/principal');
    }
}