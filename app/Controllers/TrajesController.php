<?php

namespace App\Controllers;

use App\Core\Controller;

class TrajesController extends Controller
{
    public function index()
    {
        $this->render('trajes/listar_grados');
         $this->render('trajes/listar_cumple');
          $this->render('trajes/listar_xv');
    }
}