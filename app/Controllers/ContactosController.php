<?php

namespace App\Controllers;

use App\Core\Controller;

class ContactosController extends Controller
{
    public function index()
    {
        $this->render('contactos');
    }
}