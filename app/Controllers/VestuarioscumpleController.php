<?php

namespace App\Controllers;

use App\Core\Controller;

class VestuarioscumpleController extends Controller
{
    public function index()
    {
        $this->render('vestuarioscumple/principal');
    }
}