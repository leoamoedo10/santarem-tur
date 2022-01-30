<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Culinary;
use Illuminate\Http\Request;


class AdminCulinariesController extends Controller
{
    public function index()
    {
        $culinaries = Culinarie::all();
        return view('admin.culinaries.index', compact('culinaries'));
    }//
    
    public function create()
    {
        return view('admin.culinaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $culinary = Culinary::firstOrCreate([
            'name' => $request->name,
            'contact' => $request->contact,
            'informations' => $request->informations,
            'address' => $request->address,
            'image_path' => $newImageName
        ]);

        if (!$culinary->wasRecentlyCreated) {
            redirect()->back()->withErrors(['Este item já existe']);
        }

        return redirect()->route('admculinaries.index')->with('success', 'Item cadastrado!');
    }
    public function edit($id)
    {
        $culinary = Culinary::find($id);

        return view('admin.culinaries.edit', compact('culinary'));
    }

    public function update(Request $request, $id)
    {
        $culinary = Culinary::find($id);

        $culinary->name = $request->name;
        $culinary->informations = $request->informations;
        $culinary->contact = $request->contact;
        $culinary->address = $request->address;
        $culinary->save();

        return redirect()->route('admculinary.index')->with('success', 'Item atualizado!');
    }

    public function destroy($id)
    {
        Culinary::find($id)->delete();

        return redirect()->back()->with('success', 'Item apagado!');
    }
}