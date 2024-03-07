@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-12 d-flex justify-content-center py-3">
                <h4><i>- EDIT YOUR BRAND -</i></h4>
            </div>
            {{-- DISPLAY DI SUMMIT DI ERRORI --}}
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            {{-- INIZIO DELLA FORM  --}}
            <div class="col-12">
                <form action="{{ route('admin.brands.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="name"
                                    class="control-label @error('name') is-invalid @enderror">Name:</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') ?? $brand->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="office-number">Office Number:</label>
                                <input type="text" name="office_number" id="office_number"
                                    class="form-control @error('office_number') is-invalid @enderror"
                                    value="{{ old('office_number') ?? $brand->office_number }}">
                                @error('office_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="website">Website:</label>
                                <input type="text" name="website" id="website"
                                    class="form-control @error('website') is-invalid @enderror"
                                    value="{{ old('website') ?? $brand->website }}">
                                @error('website')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="office-address">Office Address:</label>
                                <input type="text" name="office_address" id="office_address"
                                    class="form-control @error('office_address') is-invalid @enderror"
                                    value="{{ old('office_address') ?? $brand->office_address }}">
                                @error('office_address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mt-3">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') ?? $brand->email }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center mb-5">
                            {{-- BOTTONE DI INVIO  --}}
                            <div class="form-group mt-3">
                                <button type="submit" class="my_button px-3 py-2"><i class="fa-solid fa-plus"
                                        style="color: #ffffff;"></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
