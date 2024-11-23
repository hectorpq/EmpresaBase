<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricarController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
}
