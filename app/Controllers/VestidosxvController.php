<?php

namespace App\Controllers;

use App\Core\Controller;

class VestidosxvController extends Controller
{
    public function index()
    {
        $this->render('vestidosxv/xv');
    }
}