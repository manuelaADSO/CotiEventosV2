<?php

namespace App\Controllers;

use App\Core\Controller;

class PostresController extends Controller
{
    public function index()
    {
        $this->render('postres/principal');
    }
}