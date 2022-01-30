<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }//
    
    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $event = Event::firstOrCreate([
            'name' => $request->name,
            'contact' => $request->contact,
            'informations' => $request->informations,
            'address' => $request->address,
            'image_path' => $newImageName
        ]);

        if (!$event->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admevents.index')->with('success', 'Item cadastrado!');
    }
    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        $event->name = $request->name;
        $event->informations = $request->informations;
        $event->contact = $request->contact;
        $event->address = $request->address;
        $event->save();

        return redirect()->route('admevent.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Event::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}







