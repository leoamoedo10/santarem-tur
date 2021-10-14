<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        return view('portal.hotels.index');
    }
}
