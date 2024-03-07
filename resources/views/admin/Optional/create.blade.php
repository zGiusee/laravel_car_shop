@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 d-flex justify-content-center py-3">
                <h4><i>- ADD YOUR OPTIONAL -</i></h4>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <a class="my_button px-3 py-2" href="{{ route('admin.optionals.index')}}"><i class="fa-solid fa-left-long" style="color: #ffffff;"></i></a>
            </div>

            <div class="col-12">
                <form action="{{ route('admin.optionals.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"><i>Optional name:</i></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="price" class="form-label"><i>Price:</i></label>
                        <input type="number" step="0.01" min="0"
                            class="form-control @error('price') is-invalid @enderror" id="price" name="price" required
                            value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="col-12 d-flex justify-content-center mb-5">
                            
                        {{-- BOTTONE DI INVIO  --}}
                        <div class="form-group mt-3">
                            <button type="submit" class="my_button px-3 py-2"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    </div>
@endsection
