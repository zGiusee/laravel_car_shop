<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('optionals', 'brand')->paginate(8);

        return response()->json([
            'succes' => true,
            'results' => $cars
        ]);
    }

    public function show($id)
    {
        $car = Car::with('optionals', 'brand')->where('id', $id)->first();

        return response()->json([
            'succes' => true,
            'car' => $car
        ]);
    }

    public function car_brand($id)
    {
        $cars = DB::table('cars')
            ->join('brands', 'brands.id', '=', 'cars.brand_id')
            ->where('brands.id', $id)
            ->get();

        return response()->json([
            'succes' => true,
            'results' => $cars,
        ]);
    }
}
