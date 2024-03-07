@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 mb-0 col-12 d-flex justify-content-center">
                <h1 class="">ALL MODELS</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p><i>you can add, view, modify and delete</i></p>
            </div>
            <div class="col-12 d-flex justify-content-between align-items-center my-2">
                <p><strong>Create yours: </strong></p>
                <a class="my_button" href="{{ route('admin.cars.create') }}"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
            </div>
            <div class="col-12">
                <table class="table table-striped rounded my-table-style">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Price</th>
                            <th scope="col">Model</th>
                            <th scope="col">Fuel</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <th scope="row">{{ $car->id }}</th>
                                <td>{{ number_format($car->price, 2, ',', '.') . ' €' }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->fuel_type }}</td>
                                <td>
                                    <a class="my_button" href="{{ route('admin.cars.show', ['car' => $car->id]) }}"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                                    <a class="my_button" href="{{ route('admin.cars.edit', ['car' => $car->id]) }}"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></a>
        
                                    <button class="my_button delete_button" data-bs-toggle="modal" data-bs-target="#delete_modal"
                                        type="button" data-id="{{ $car->id }}" data-name="{{ $car->model }}"
                                        data-type="cars">
                                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    </button>
        
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
    @include('admin.partials.delete_modal')
@endsection
