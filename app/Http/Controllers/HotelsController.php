<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();

        return view('portal.hotels.index', compact('hotels'));
    }

    public function create(){
        return view('hotels.create');
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('portal.hotels.show', compact('hotel'));
    }
}
