<?php

namespace App\Controllers;

use App\Core\Controller;

class VestidosninaxvController extends Controller
{
    public function index()
    {
        $this->render('vestidosninaxv/xv');
    }
}