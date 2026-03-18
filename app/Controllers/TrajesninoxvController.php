<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajesninoxvController extends Controller
{
    public function index()
    {
        $this->render('trajesninoxv/xv');
    }
}