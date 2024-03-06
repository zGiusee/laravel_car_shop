<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('optionals', 'brands')->paginate(8);

        return response()->json([
            'succes' => true,
            'results' => $cars
        ]);
    }
}
