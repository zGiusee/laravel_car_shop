@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="my-title my-3">
            All cars
        </div>
        <table class="table table-striped rounded my-table-style">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Model</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->model }}</td>
                        <td>
                            {{-- <a href="{{ route('admin.cars.show', ['car' => $car->id]) }}">Details</a> --}}
                            <button class="delete_button">Edit</button>
                            <button class="delete_button" data-bs-toggle="modal" data-bs-target="#delete_modal"
                                type="button">
                                {{-- data-car-id="{{ $car->id }}"> --}} Delete
                            </button>
                            <a href="{{ route('admin.cars.edit', ['car' => $car->id]) }}" class="btn btn-primary ">Mod</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.partials.delete_modal')
    @endsection
