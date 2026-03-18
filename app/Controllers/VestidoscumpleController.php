<?php

namespace App\Controllers;

use App\Core\Controller;

class VestidoscumpleController extends Controller
{
    public function index()
    {
        $this->render('vestidoscumple/cumple');
    }
}