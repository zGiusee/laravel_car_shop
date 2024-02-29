@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="my-title my-3">
            All brands
        </div>
        <div class="my-3">
            <a class="my_button" href="{{ route('admin.brands.create') }}">Create</a>
        </div>
        <table class="table table-striped rounded my-table-style">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <th scope="row">{{ $brand->id }}</th>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->address }}</td>
                        <td>
                            <a class="my_button" href="{{ route('admin.brands.show', ['brand' => $brand->id]) }}">Details</a>

                            <button class="my_button delete_button" data-bs-toggle="modal" data-bs-target="#brands_delete_modal"
                                type="button" data-id="{{ $brand->id }}" data-name="{{ $brand->name }}" data-type="brands"> Delete
                            </button>

                            <a class="my_button" href="{{ route('admin.brands.edit', ['brand' => $brand->id]) }}">Mod</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.brands.partials.brands_delete_modal')
    @endsection
