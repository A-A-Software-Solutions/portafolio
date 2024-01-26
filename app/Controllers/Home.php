<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('layouts/head') . view('layouts/header') . view('modules/Index') . view('layouts/footer');
    }

}