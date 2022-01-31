<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Party::all();

        return view('portal.eventos.index', compact('events'));
    }

    public function show($id)
    {
        $event = Party::find($id);

        return view('portal.eventos.show', compact('event'));
    }
}
