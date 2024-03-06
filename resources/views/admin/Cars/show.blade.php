@extends('layouts.admin')

@section('content')
    <div class="bg-secondary p-5">
        <main class="bg-white pb-5">
            <div class="container py-3">
                <div class="row">
                    <div class="col-7">
                        <div class="image_container">
                            <img src="https://www.mgcars.com/images/mg-models/newmghsphev/color/Black.png" alt="image_car"
                                class="img-fluid">
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

                    {{-- LISTA ICONE --}}
                    <div class="col-5">
                        <ul class="list-unstyled d-flex text-primary">
                            <li class="me-5">
                                <span><i class="fa-regular fa-star"></i></span>
                                <span>Save</span>
                            </li>
                            <li class="me-5">
                                <i class="fa-solid fa-share-nodes"></i>
                                <span>Share</span>
                            </li>
                            <li class="me-5">
                                <i class="fa-solid fa-print"></i>
                                <span>Print</span>
                            </li>
                        </ul>

                        {{-- NOME MODELLO --}}
                        <div class="fw-bolder fs-4 my-3">{{ $car->model }}</div>

                        {{-- LOCATION --}}
                        <div class="text-primary pb-4 border-bottom">
                            <span class="me-2"><i class="fa-solid fa-location-dot"></i></span>
                            <span>Milan, IT</span>
                        </div>

                        {{-- PRICE --}}
                        <div class="my-5 fs-3">{{ number_format($car->price, 2, ',', '.') . ' €' }}</div>

                        {{-- CONTACT --}}
                        <div class="pb-4 border-bottom">
                            <a class="btn btn-primary me-2 fw-bolder text-uppercase px-4">Contact Owner</a>
                            <a class="btn btn-primary me-2 fw-bolder text-uppercase px-4">+393194256877</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container border-top border-bottom">
                <div class="row">
                    <div class="col-12">
                        <h2 class="fw-bolder">Moore Details</h2>
                    </div>
                </div>

                <div class="row">
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
                            <span class="fst-italic">{{ $car->paint_type }}</span>
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
        </main>
    </div>
@endsection

{{-- <div class="card" style="width: 50rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Car Model: {{ $car->model }}</h5>
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
    </div> --}}
