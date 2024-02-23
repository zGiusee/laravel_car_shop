@extends('layouts.admin')

@section('content')
    <div>
        <table class="table my-table-style">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">MODEL</th>
                    <th scope="col">TOOLS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->model }}</td>
                        <td>
                            <button class="delete_button" data-bs-toggle="modal" data-bs-target="#delete_modal" type="button"
                                data-car-id="{{ $car->id }}">
                                Delete
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.partials.delete_modal')
    </div>
@endsection
