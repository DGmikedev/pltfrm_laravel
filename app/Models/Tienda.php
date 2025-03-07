<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
        'id_companie',
        'zone',
        'edo',
        'name',
        'address',
        'deptos',
        'sells_gral'
        'average_mont'
    ];
}
