<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    public function index()
    {
        return view('portal.culinaria.index');
    }
}
