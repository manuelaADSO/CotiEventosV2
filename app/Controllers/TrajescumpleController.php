<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajescumpleController extends Controller
{
    public function index()
    {
        $this->render('trajescumple/cumple');
    }
}