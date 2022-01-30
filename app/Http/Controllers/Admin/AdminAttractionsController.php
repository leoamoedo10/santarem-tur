<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attractions;
use Illuminate\Http\Request;

class AdminAttractionsController extends Controller
{
    public function index()
    {
        $Attractions = Culinarie::all();
        return view('admin.attractions.index', compact('attractions'));
    }//
    
    public function create()
    {
        return view('admin.attractions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $attractions = Attractions::firstOrCreate([
            'name' => $request->name,
            'contact' => $request->contact,
            'informations' => $request->informations,
            'address' => $request->address,
            'image_path' => $newImageName
        ]);

        if (!$attractions->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admAttractions.index')->with('success', 'Item cadastrado!');
    }
    public function edit($id)
    {
        $attractions = Attractions::find($id);

        return view('admin.Attractions.edit', compact('attractions'));
    }

    public function update(Request $request, $id)
    {
        $attractions = Attractions::find($id);

        $attractions->name = $request->name;
        $attractions->informations = $request->informations;
        $attractions->contact = $request->contact;
        $attractions->address = $request->address;
        $attractions->save();

        return redirect()->route('admattractions.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Attractions::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}
