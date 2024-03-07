@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="mt-3 mb-0 col-12 d-flex justify-content-center">
                <h1 class="">ALL OPTIONALS</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p><i>you can add, modify and delete</i></p>
            </div>
            <div class="col-12 d-flex justify-content-between align-items-center my-2">
                <p><strong>Add new optional: </strong></p>
                <a class="my_button" href="{{ route('admin.optionals.create') }}"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
            </div>
            <div class="col-12">
                <table class="table table-striped rounded my-table-style">
                    <thead class="table-dark">
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
            
                                    <a class="my_button" href="{{ route('admin.optionals.edit', ['optional' => $optional->id]) }}"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></a>

                                    <button class="my_button delete_button" data-bs-toggle="modal"
                                        data-bs-target="#delete_modal_optional" type="button" data-id="{{ $optional->id }}"
                                        data-name="{{ $optional->name }}" data-type="optionals">
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
    

        @include('admin.optional.partials.delete_modal_optional')
    @endsection
