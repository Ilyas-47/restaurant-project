<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodPlaceController extends Controller
{
    public function __invoke(){
        return view('layout.foodplace_l');
    }
}
