<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    public function index()
    {
        $culinaries = Culinary::all();

        return view('portal.culinaria.index', compact('culinaries'));
    }

    public function show($id)
    {
        $culinary = Culinary::find($id);

        return view('portal.culinaria.show', compact('culinary'));
    }
}
