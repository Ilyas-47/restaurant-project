<?php

namespace App\Http\Controllers;
use App\Models\Chefs;
use Illuminate\Http\Request;

class Form_ChefController extends Controller
{
    public function ShowFormChef()
    {
        return view('layout.form_chef_l');
    }

    public function Add_Chef(Request $request)
    {
        $validated = $request->validate([
            'nom_chef' => 'required|string|max:255',
            'image_chef' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cuisine'=> 'required|string|in:Moroccan,Italien,france,asian',
            'bio' => 'required|string',
        ]);
        if ($request->hasFile('image_chef')) {
            $validated['image_chef'] = $request->file('image_chef')->store('chefs', 'public');
        }

        Chefs::create([
            'nom_chef' => $validated['nom_chef'],
            'image_chef' => $validated['image_chef'],  
            'cuisine' => $validated['cuisine'],
            'bio' => $validated['bio'],
        ]);
        return redirect()->route('message');
    }

    
    
}