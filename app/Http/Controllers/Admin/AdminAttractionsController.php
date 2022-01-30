<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attraction;
use Illuminate\Http\Request;

class AdminAttractionsController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();
        return view('admin.pontos.index', compact('attractions'));
    }

    public function create()
    {
        return view('admin.pontos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $attraction = Attraction::firstOrCreate([
            'name' => $request->name,
            'informations' => $request->informations,
            'address' => $request->address,
            'image_path' => $newImageName
        ]);

        if (!$attraction->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admattractions.index')->with('success', 'Item cadastrado!');
    }

    public function edit($id)
    {
        $attraction = Attraction::find($id);

        return view('admin.pontos.edit', compact('attraction'));
    }

    public function update(Request $request, $id)
    {
        $attraction = Attraction::find($id);

        $attraction->name = $request->name;
        $attraction->informations = $request->informations;
        $attraction->address = $request->address;
        $attraction->save();

        return redirect()->route('admattractions.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Attraction::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}
