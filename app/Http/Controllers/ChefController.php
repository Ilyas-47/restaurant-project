<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function chef_profil(){
        return view('layout.chef_l');
    }
}
