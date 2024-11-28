<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    use HasFactory;
    protected $table = 'chefs';
    protected $primaryKey = 'id_chef'; 
    protected $fillable =[
        'nom_chef',
        'image_chef',
        'cuisine',
        'bio',

    ];
}
