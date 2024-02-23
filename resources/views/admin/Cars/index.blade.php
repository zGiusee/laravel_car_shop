@extends('layouts.admin')

@section('content')
    <div>
        <div class="d-flex justify-content-between align-items-center ">
            <h2>Cars</h2>
            <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">Add Car</a>
        </div>
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
                        <th scope="row">{{$car->id}}</th>
                        <td>{{$car->price}}</td>
                        <td>{{$car->model}}</td>
                        <td>
                            <a href="{{ route('admin.cars.edit', ['car' => $car->id]) }}" class="btn btn-primary ">Mod</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
