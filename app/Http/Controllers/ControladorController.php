<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    public function index()
    {
        return view('posts2.index');
    }
}
