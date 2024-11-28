<?php

namespace App\Http\Controllers;

use App\Models\Chefs; 
use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function __invoke (){
        $chefs = Chefs::all(); 
        return view('layout.menu_l', compact('chefs')); 
    }
}
