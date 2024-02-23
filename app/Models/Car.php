<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'price',
        'model',
        'km',
        'img',
        'immatricolation_year',
        'plate',
        'year',
        'color',
        'fuel_type',
        'used',
        'description',
        'seats',
        'transmission',
        'owners',
        'engine_size',
        'power',
        'paint_type',
        'material_type',
    ];
}
