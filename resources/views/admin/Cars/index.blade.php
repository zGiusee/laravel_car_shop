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
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        {{-- <a href="{{ route('admin.cars.show', ['car' => $car->id]) }}">Details</a> --}}
                        <button class="delete_button">Edit</button>
                        <button class="delete_button" data-bs-toggle="modal" data-bs-target="#delete_modal" type="button">
                            {{-- data-car-id="{{ $car->id }}"> --}} Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        @include('admin.partials.delete_modal')
    </div>
@endsection
