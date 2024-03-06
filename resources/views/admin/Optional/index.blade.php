@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="my-title my-3 text-uppercase text-center">
            Optionals
        </div>

        <div class="my-3">
            <a class="my_button" href="{{ route('admin.optionals.create') }}">Add new optional</a>
        </div>

        <table class="table table-striped rounded my-table-style">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($optionals as $optional)
                    <tr>
                        <th scope="row">{{ $optional->id }}</th>
                        <td>{{ $optional->name }}</td>
                        <td>{{ $optional->price }} €</td>
                        <td>

                            <a class="my_button"
                                href="{{ route('admin.optionals.edit', ['optional' => $optional->id]) }}">Modify</a>

                            <button class="my_button delete_button" data-bs-toggle="modal"
                                data-bs-target="#delete_modal_optional" type="button" data-id="{{ $optional->id }}"
                                data-name="{{ $optional->name }}" data-type="optionals">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('admin.optional.partials.delete_modal_optional')
    @endsection
