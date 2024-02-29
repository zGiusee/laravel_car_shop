@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <form action="{{ route('admin.cars.update', ['car' => $car->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3">
                        <label for="price" class="control-label">Price:</label>
                        <input required type="text" name="price" id="price" placeholder="Price"
                            class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="model">Model:</label>
                        <input required type="text" name="model" id="model" placeholder="Model"
                            class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}">
                        @error('model')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="power">power:</label>
                        <input required type="text" name="power" id="power" placeholder="power"
                            class="form-control @error('power') is-invalid @enderror" value="{{ old('power') }}">
                        @error('power')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="year">year:</label>
                        <input required type="text" name="year" id="year" placeholder="year"
                            class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}">
                        @error('year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="color">color:</label>
                        <input required type="text" name="color" id="color" placeholder="color"
                            class="form-control @error('color') is-invalid @enderror" value="{{ old('color') }}">
                        @error('color')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="fuel_type">fuel_type:</label>
                        <input required type="text" name="fuel_type" id="fuel_type" placeholder="fuel_type"
                            class="form-control @error('fuel_type') is-invalid @enderror" value="{{ old('fuel_type') }}">
                        @error('fuel_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="used">used:</label>
                        <input required type="text" name="used" id="used" placeholder="used"
                            class="form-control @error('used') is-invalid @enderror" value="{{ old('used') }}">
                        @error('used')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="optional">Select Optional</label>
                        <div>
                            @foreach ($optionals as $optional)
                                <div class="form-check-inline">
                                    @if ($errors->any())
                                        <input type="checkbox" name="optionals[]" id="optional-{{ $optional->id }}"
                                            class="form-check-input" value="{{ $optional->id }}"
                                            {{ is_array($optional->id, old('optionals')) ? 'checked' : '' }}>
                                    @else
                                        <input type="checkbox" name="optionals[]" id="optional-{{ $optional->id }}"
                                            class="form-check-input" value="{{ $optional->id }}"
                                            {{ $car->optionals->contains($optional->id) ? 'checked' : '' }}>
                                    @endif
                                    <label for="" class="form-check-label">{{ $optional->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="seats">seats:</label>
                        <input required type="text" name="seats" id="seats" placeholder="seats"
                            class="form-control @error('seats') is-invalid @enderror" value="{{ old('seats') }}">
                        @error('seats')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="transmission">transmission:</label>
                        <input required type="text" name="transmission" id="transmission" placeholder="transmission"
                            class="form-control @error('transmission') is-invalid @enderror"
                            value="{{ old('transmission') }}">
                        @error('transmission')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="engine_size">engine_size:</label>
                        <input required type="text" name="engine_size" id="engine_size" placeholder="engine_size"
                            class="form-control @error('engine_size') is-invalid @enderror"
                            value="{{ old('engine_size') }}">
                        @error('engine_size')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
