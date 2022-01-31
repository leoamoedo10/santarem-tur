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
        $event = Party::firstOrCreate([
            'name' => $request->name,
            'contact' => $request->contact,
            'informations' => $request->informations,
            'address' => $request->address,
        ]);

        if (!$event->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admevents.index')->with('success', 'Item cadastrado!');
    }

    public function edit($id)
    {
        $event = Party::find($id);

        return view('admin.eventos.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Party::find($id);

        $event->name = $request->name;
        $event->informations = $request->informations;
        $event->contact = $request->contact;
        $event->address = $request->address;
        $event->save();

        return redirect()->route('admevents.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Party::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}
