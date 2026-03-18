<?php

namespace App\Controllers;

use App\Core\Controller;

class VestuariosxvController extends Controller
{
    public function index()
    {
        $this->render('vestuariosxv/xv');
    }
}