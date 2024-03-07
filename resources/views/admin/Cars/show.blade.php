@extends('layouts.admin')

@section('content')
    <div class="p-5 mt-4">
        <main class="bg-white pb-5">
            <div class="container py-3">
                <div class="row">
                    <div class="col-7">
                        <div class="image_container">
                            @if ($car->img !== null)
                                @if (Str::contains($car->img, 'https'))
                                    <img src="{{ $car->img }}" alt="{{ $car->name }}">
                                @else
                                    <img src="{{ asset('/storage/' . $car->img) }}" alt="{{ $car->name }}">
                                @endif
                            @else
                                <img src="{{ asset('/storage/cars_image/carplaceholder.png') }}" alt="{{ $car->name }}">
                            @endif
                        </div>

                        {{-- ICONE SOTTO IMMAGINE --}}
                        <div class="sub_image_icon_container my-4  border rounded-2 py-2">
                            <div class="row justify-content-center">
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fa-solid fa-road"></i></span>
                                        <span class="fw-bolder">Km</span>
                                    </div>
                                    <div>{{ $car->km }}</div>
                                </div>
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fas fa-cogs"></i></span>
                                        <span class="fw-bolder">Transmission</span>
                                    </div>
                                    <div>{{ $car->transmission }}</div>
                                </div>
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fas fa-calendar-alt"></i>
                                        </span>
                                        <span class="fw-bolder">Year</span>
                                    </div>
                                    <div>{{ $car->year }}</div>
                                </div>
                            </div>

                            <div class="row py-3 justify-content-center">
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fa-solid fa-gas-pump"></i></span>
                                        <span class="fw-bolder">Fuel type</span>
                                    </div>
                                    <div>{{ $car->fuel_type }}</div>
                                </div>
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fa-solid fa-car"></i></span>
                                        <span class="fw-bolder">Power</span>
                                    </div>
                                    <div>{{ $car->power }}</div>
                                </div>
                                <div class="col-3 text-center">
                                    <div>
                                        <span><i class="fa-solid fa-user-tie"></i>
                                        </span>
                                        <span class="fw-bolder">Owner</span>
                                    </div>
                                    <div>{{ $car->owners }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">

                        <h2 class="fw-bolder">More Details</h2>
                        {{-- NOME MODELLO --}}
                        <div class="fw-bolder fs-4 my-3">{{ $car->model }}</div>

                        {{-- PRICE --}}
                        <div class="my-5 fs-3">{{ number_format($car->price, 2, ',', '.') . ' €' }}</div>

                        <ul class="list-unstyled">
                            <li class="my-2"><span class="text-uppercase fw-bolder ">Immatricolation year:</span>
                                <span
                                    class="fst-italic">{{ $car->immatricolation_year != null ? $car->immatricolation_year : 'Not available' }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Used:</span>
                                <span class="fst-italic">{{ $car->used != false ? 'Yes' : 'No' }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Plate:</span>
                                <span class="fst-italic">{{ $car->plate }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Color:</span>
                                <span class="fst-italic">{{ $car->color }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Paynt type:</span>
                                <span
                                    class="fst-italic">{{ $car->paint_type != null ? $car->paint_type : 'Not available' }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Material type</span>
                                <span
                                    class="fst-italic">{{ $car->material_type != null ? $car->material_type : 'Not available' }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Number of seats:</span>
                                <span class="fst-italic">{{ $car->seats }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Description</span>
                                <span
                                    class="fst-italic">{{ $car->description != null ? $car->description : 'Not available' }}</span>
                            </li>

                            <li class="my-2"><span class="text-uppercase fw-bolder">Engine size:</span>
                                <span class="fst-italic">{{ $car->engine_size }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </main>
    </div>
@endsection
