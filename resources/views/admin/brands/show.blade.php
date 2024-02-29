@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1>Brand Details</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 50rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $brand->name }}</h5>
                        <div class="card-text">
                            Address: {{ $brand->office_address }}
                        </div> 
                        <div class="card-text">
                            Number: {{ $brand->office_number }}
                        </div>
                        <div class="card-text">
                            Email: {{ $brand->email }}
                        </div>
                        <div class="card-text">
                            Website: <a href="{{ $brand->website }}">click</a>
                        </div>

                        <div class="mt-4">
                            <h6>All brand models</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
