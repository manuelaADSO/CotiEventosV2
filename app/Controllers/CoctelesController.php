<?php

namespace App\Controllers;

use App\Core\Controller;

class CoctelesController extends Controller
{
    public function index()
    {
        $this->render('cocteles/principal');
    }
}