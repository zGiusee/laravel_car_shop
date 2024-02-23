@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cars</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table my-table-style">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">model</th>
                            <th scope="col">price</th>
                            <th scope="col">description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->price }}</td>
                                <td>{{ $car->description }}</td>
                                <td>
                                    <a href="{{ route('admin.cars.show', ['car' => $car->id]) }}">Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
