<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class AdminEventsController extends Controller
{
    public function index()
    {
        $events = Party::all();
        return view('admin.eventos.index', compact('events'));
    }

    public function create()
    {
        return view('admin.eventos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $event = Party::find($id);

        return view('admin.eventos.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
