<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Optional;
use PhpOption\Option;
use App\Models\Brand;

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
        'brand_id'
    ];

    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
