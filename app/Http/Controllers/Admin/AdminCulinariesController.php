<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Culinary;
use Illuminate\Http\Request;

class AdminCulinariesController extends Controller
{
    public function index()
    {
        $culinaries = Culinary::all();
        return view('admin.culinaria.index', compact('culinaries'));
    }

    public function create()
    {
        return view('admin.culinaria.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $culinary = Culinary::find($id);

        return view('admin.culinaria.edit', compact('culinary'));
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
