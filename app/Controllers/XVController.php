<?php

namespace App\Controllers;

use App\Core\Controller;

class XVController extends Controller
{
    public function index()
    {
        $this->render('xv/principal');
    }
}