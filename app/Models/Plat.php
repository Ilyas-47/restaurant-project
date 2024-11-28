<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $table = 'plats';
    protected $primaryKey = 'id_plat'; 
    protected $fillable =[
        'nom_plat',
        'image_plat',
        'prix',
        'rate',
        'delivery',
        'diatry',
        'categorie',
        'id_chef'


    ];

    public function chef()
{
    return $this->belongsTo(Chef::class, 'id_chef');
}

}
