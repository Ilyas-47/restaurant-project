<?php

namespace App\Http\Controllers;
use App\Models\Chefs;
use Illuminate\Http\Request;

class ChefListController extends Controller
{
    public function index()
    {
        $chefs = Chefs::all();
        return view('layout.chef_list_l', compact('chefs'));
    }

    public function edit($id_chef)
    {
        $chef = Chefs::findOrFail($id_chef);
        return view('layout.chef_list_edit_l', compact('chef')); 
    }

    public function update(Request $request, $id_chef)
    {
        $chef = Chefs::findOrFail($id_chef);
        $chef->update($request->all());
        return redirect()->route('chef_list')->with('success', 'Chef mis à jour avec succès!');
    }

    public function destroy(Request $request,$id_chef)
    {
        $chef = Chefs::findOrFail($id_chef);
        $chef->delete($request->all());
        return redirect()->route('chef_list')->with('success', 'Chef supprimé avec succès!'); 
    }
}
