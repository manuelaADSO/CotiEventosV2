<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajesninocumpleController extends Controller
{
    public function index()
    {
        $this->render('trajesninocumple/cumple');
    }
}