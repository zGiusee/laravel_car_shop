@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h2 class="text-uppercase">add new optional</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <form action="{{ route('admin.optionals.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Optional name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" min="0"
                            class="form-control @error('price') is-invalid @enderror" id="price" name="price" required
                            value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-outline-dark text-uppercase fw-bolder my-3">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
