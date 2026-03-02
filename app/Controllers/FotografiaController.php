<?php

namespace App\Controllers;

use App\Core\Controller;

class FotografiaController extends Controller
{
    public function index()
    {
        $this->render('fotografia/principal');
    }
}