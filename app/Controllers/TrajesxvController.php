<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajesxvController extends Controller
{
    public function index()
    {
        $this->render('trajesxv/xv');
    }
}