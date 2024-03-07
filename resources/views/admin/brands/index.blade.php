@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 mb-0 col-12 d-flex justify-content-center">
                <h1 class="">ALL BRANDS</h1>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p><i>you can add, view, modify and delete</i></p>
        </div>
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <p><strong>Create yours: </strong></p>
            <a class="my_button" href="{{ route('admin.brands.create') }}"><i class="fa-solid fa-plus"
                    style="color: #ffffff;"></i></a>
        </div>
        <div class="col-12">
            <table class="table table-striped rounded my-table-style">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Emails</th>
                        <th scope="col">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->office_number }}</td>
                            <td>{{ $brand->email }}</td>
                            <td>
                                <a class="my_button" href="{{ route('admin.brands.show', ['brand' => $brand->id]) }}"><i
                                        class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                                <a class="my_button" href="{{ route('admin.brands.edit', ['brand' => $brand->id]) }}"><i
                                        class="fa-solid fa-pen" style="color: #ffffff;"></i></a>

                                <button class="my_button delete_button" data-bs-toggle="modal"
                                    data-bs-target="#brands_delete_modal" type="button" data-id="{{ $brand->id }}"
                                    data-name="{{ $brand->name }}" data-type="brands">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @include('admin.brands.partials.brands_delete_modal')
@endsection
