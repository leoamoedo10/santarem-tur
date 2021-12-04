<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class AdminHotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('admin.hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = Hotel::firstOrCreate([
            'name' => $request->name,
            'contact' => $request->contact,
            'informations' =>$request->informations,
            'address' => $request->address,
        ]);

        if (!$hotel->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admhotels.index')->with('success', 'Item cadastrado!');
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('admin.hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);

        $hotel->name = $request->name;
        $hotel->informations = $request->informations;
        $hotel->contact = $request->contact;
        $hotel->address = $request->address;

        $hotel->save();

        return redirect()->route('admhotels.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Hotel::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}
