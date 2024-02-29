@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Brand Details</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 50rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $brand->name }}</h5>
                        <div class="card-text">Price: {{ $car->price }}</div>
                        <div class="card-text">KM: {{ $car->km }}</div>

                        <div class="card-text">Immatricolation year:
                            {{ date('d-m-Y', strtotime($car->immatricolation_year)) }}</div>
                        <div class="card-text">Year:
                            {{ date('d-m-Y', strtotime($car->year)) }}</div>

                        <div class="card-text">Plate: {{ $car->plate }}</div>
                        <div class="card-text">Color: {{ $car->color }}</div>
                        <div class="card-text">Fuel type: {{ $car->fuel_type }}</div>
                        <div class="card-text">Used: {{ $car->used }}</div>
                        <div class="card-text">Description: {{ $car->description }}</div>
                        <div class="card-text">Number of seats: {{ $car->seats }}</div>
                        <div class="card-text">transmission: {{ $car->transmission }}</div>
                        <div class="card-text">Owner: {{ $car->owners }}</div>
                        <div class="card-text">Engine size: {{ $car->engine_size }}</div>
                        <div class="card-text">Power: {{ $car->power }}</div>
                        <div class="card-text">Paint tipe: {{ $car->paint_type }}</div>
                        <div class="card-text">Material type: {{ $car->material_type }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
