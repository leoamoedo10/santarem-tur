<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionsController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();

        return view('portal.pontos.index', compact('attractions'));
    }

    public function show($id)
    {
        $attraction = Attraction::find($id);
        return view('portal.pontos.show', compact('attraction'));
    }
}
