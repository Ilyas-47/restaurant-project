<?php

namespace App\Http\Controllers;

use App\Models\Chefs; 
use App\Models\Plat; 
use Illuminate\Http\Request;

class Form_PlatController extends Controller
{
    
    public function showChef()
    {
        $chefs = Chefs::all(); 
        return view('layout.form_plat_l', compact('chefs'));
    }

    public function storePlat(Request $request)
    {
        $validated = $request->validate([
            'nom_plat' => 'required|string|max:40',
            'image_plat' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prix' => 'required|numeric|min:0',
            'rate' => 'required|string|',
            'delivery' => 'required|string|max:60',
            'diatry' => 'required|string|max:60',
            'categorie' => 'required|string|max:60',
            'id_chef' => 'required|exists:chefs,id_chef', 
        ]);

        $imagePath = $request->file('image_plat')->store('plats_images', 'public');

        Plat::create([
            'nom_plat' => $validated['nom_plat'],
            'image_plat' => $imagePath,
            'prix' => $validated['prix'],
            'rate' => $validated['rate'],
            'delivery' => $validated['delivery'],
            'diatry' => $validated['diatry'],
            'categorie' => $validated['categorie'],
            'id_chef' => $validated['id_chef'],
        ]);

        return redirect()->back()->with('success', 'Le plat a ete ajoute avec succes !');
    }
}
