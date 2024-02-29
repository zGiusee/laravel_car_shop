<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Optional;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use PhpOption\Option;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals = Optional::all();

        return view('admin.cars.create', compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {


        $cars = new Car();
        $form_data = $request->all();
        $cars->fill($form_data);

        $cars->save();

        if ($request->has('optionals')) {
            $cars->optionals()->attach($form_data['optionals']);
        };


        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $optionals = Optional::all();

        // if ($request->has('optionals')) {
        //     $cars->optionals()->sync($form_data['optional']);
        // };

        return view('admin.cars.edit', compact('car', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();
        $car->update($form_data);

        if ($request->has('optionals')) {
            $car->optionals()->sync($form_data['optionals']);
        } else {
            $car->optionals()->sync([]);
        }

        return redirect()->route('admin.cars.index', ['car' =>  $car->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index');
    }
}
