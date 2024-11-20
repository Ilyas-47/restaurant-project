<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function __invoke(){
        return view('layout.chef_l');
    }
}
