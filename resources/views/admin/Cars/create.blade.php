@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <form action="{{ route('admin.cars.store') }}" method="post">
                    @csrf
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
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="power">power:</label>
                        <input required type="text" name="power" id="power" placeholder="power"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="year">year:</label>
                        <input required type="text" name="year" id="year" placeholder="year"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="color">color:</label>
                        <input required type="text" name="color" id="color" placeholder="color"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="fuel_type">fuel_type:</label>
                        <input required type="text" name="fuel_type" id="fuel_type" placeholder="fuel_type"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="used">used:</label>
                        <input required type="text" name="used" id="used" placeholder="used"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="optional">Select Optional</label>
                        <div>
                            @foreach ($optionals as $optional)
                                <div class="form-check-inline">
                                    <input type="checkbox" name="optionals[]" id="optional-{{ $optional->id }}"
                                        class="form-check-input" value="{{ $optional->id }}" @checked(is_array(old('optionals')) && in_array($optional->id, old('optionals')))>
                                    <label for="" class="form-check-label">{{ $optional->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="seats">seats:</label>
                        <input required type="text" name="seats" id="seats" placeholder="seats"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="transmission">transmission:</label>
                        <input required type="text" name="transmission" id="transmission" placeholder="transmission"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="engine_size">engine_size:</label>
                        <input required type="text" name="engine_size" id="engine_size" placeholder="engine_size"
                            class="form-control">

                </form>
            </div>
        </div>
    </div>
@endsection
