@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1>Brand Details</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="card" style="width:100%">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title mb-4">{{ $brand->name }}</h5>
                        <div class="card-text mt-2 ">
                            <i class="bi bi-geo-fill"></i> <strong>Address:</strong> {{ $brand->office_address }}
                        </div>
                        <div class="card-text mt-2">
                            <i class="bi bi-telephone-fill"></i> <strong>Number:</strong> {{ $brand->office_number }}
                        </div>
                        <div class="card-text mt-2">
                            <i class="bi bi-envelope-fill"></i> <strong>Email:</strong> {{ $brand->email }}
                        </div>
                        <div class="card-text mt-2  ">
                            <i class="bi bi-search"></i> <strong>Website:</strong> <a
                                href="{{ $brand->website }}">{{ $brand->website }}</a>
                        </div>

                        <div class="mt-4">
                            <h6>All brand models</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <img src="https://i.pinimg.com/736x/ab/04/12/ab041223dcc24d5f8e9c647cfb7fa606.jpg" class="img-fluid"
                    alt="Descrizione dell'immagine">
            </div>

        </div>
    @endsection
