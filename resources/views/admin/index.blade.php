@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h2 class="text-center fw-bolder">BOOL3SHOP STATISTICS</h2>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header fs-4 text-center">
                        Optionals
                    </div>
                    <div class="card-body border">
                        <img src="{{ Vite::asset('resources/img/pie-chart.png') }}" alt="bool3shop_torta">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header fs-4 text-center">
                        Brands
                    </div>
                    <div class="card-body border">
                        <img src="{{ Vite::asset('resources/img/bar-graph.png') }}" alt="bool3shop_torta">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
