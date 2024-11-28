<?php

namespace App\Http\Controllers;
use App\Models\plat;
use Illuminate\Http\Request;

class PlatListController extends Controller
{
    public function index()
    {
        $plats = plat::all();
        return view('layout.list_plat_l', compact('plats'));
    }

    public function edit($id_plat)
    {
        $plat = plat::findOrFail($id_plat);
        return view('layout.list_plat_edit_l', compact('plat')); 
    }

    public function update(Request $request, $id_plat)
    {
        $plat = plats::findOrFail($id_plat);
        $plat->update($request->all());
        return redirect()->route('list_plat')->with('success', 'Plat mis a jour avec succes!');
    }

    public function destroy($id_plat)
    {
        $plat = plat::findOrFail($id_plat);
        $plat->delete();
        return redirect()->route('list_plat')->with('success', 'Plat supprime avec succes!'); 
    }
}
