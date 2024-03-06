@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="my-title my-3">
            All cars
        </div>
        <div class="my-3">
            <a class="my_button" href="{{ route('admin.cars.create') }}">Create</a>
        </div>
        <table class="table table-striped rounded my-table-style">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Model</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->model }}</td>
                        <td>
                            <a class="my_button" href="{{ route('admin.cars.show', ['car' => $car->id]) }}">Details</a>

                            <button class="my_button delete_button" data-bs-toggle="modal" data-bs-target="#delete_modal"
                                type="button" data-id="{{ $car->id }}" data-name="{{ $car->model }}"
                                data-type="cars"> Delete
                            </button>

                            <a class="my_button" href="{{ route('admin.cars.edit', ['car' => $car->id]) }}">Mod</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.partials.delete_modal')
    @endsection
