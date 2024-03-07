@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-12 d-flex justify-content-center py-3">
                <h4><i>- EDIT YOUR CAR -</i></h4>
            </div>
            {{-- DISPLAY SUMMIT DI ERRORI  --}}
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

            {{-- INIZIO FORM  --}}
            <div class="col-12">
                <form action="{{ route('admin.cars.update', ['car' => $car->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="price" class="control-label"><i>Price:</i></label>
                                <input required type="text" name="price" id="price"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price') ?? $car->price }}">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="model"><i>Model:</i></label>
                                <input required type="text" name="model" id="model"
                                    class="form-control @error('model') is-invalid @enderror"
                                    value="{{ old('model') ?? $car->model }}">
                                @error('model')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="brand_id"><i>Select the brand:</i></label>
                                <select class="form-select" name="brand_id" id="brand_id">
                                    <option value="">Select an option</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @selected($brand->id == old('brand_id'))>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="power"><i>Power</i></label>
                                <input required type="text" name="power" id="power"
                                    class="form-control @error('power') is-invalid @enderror"
                                    value="{{ old('power') ?? $car->power }}">
                                @error('power')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="year"><i>Year:</i></label>
                                <input required type="text" name="year" id="year"
                                    class="form-control @error('year') is-invalid @enderror"
                                    value="{{ old('year') ?? $car->year }}">
                                @error('year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="color"><i>Color</i></label>
                                <input required type="text" name="color" id="color"
                                    class="form-control @error('color') is-invalid @enderror"
                                    value="{{ old('color') ?? $car->color }}">
                                @error('color')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="fuel_type"><i>Fuel</i></label>
                                <input required type="text" name="fuel_type" id="fuel_type"
                                    class="form-control @error('fuel_type') is-invalid @enderror"
                                    value="{{ old('fuel_type') ?? $car->fuel_type }}">
                                @error('fuel_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="used"><i>Used?</i></label>
                                <select class="form-select @error('used') is-invalid @enderror" name="used"
                                    id="used">
                                    <option value="0">Select an option</option>
                                    <option value="1" @selected(old('used') == 1)>Usata</option>
                                    <option value="2" @selected(old('used') == 2)>Nuova</option>
                                </select>
                                @error('used')
                                    <div class="text-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="seats"><i>How many seats?</i></label>
                                <input required type="text" name="seats" id="seats"
                                    class="form-control @error('seats') is-invalid @enderror"
                                    value="{{ old('seats') ?? $car->seats }}">
                                @error('seats')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="transmission"><i>Transmission:</i></label>
                                <input required type="text" name="transmission" id="transmission"
                                    class="form-control @error('transmission') is-invalid @enderror"
                                    value="{{ old('transmission') ?? $car->transmission }}">
                                @error('transmission')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="engine_size"><i>Engine Size:</i></label>
                                <input required type="text" name="engine_size" id="engine_size"
                                    class="form-control @error('engine_size') is-invalid @enderror"
                                    value="{{ old('engine_size') ?? $car->engine_size }}">
                                @error('engine_size')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="img"><i>Choose the car's image:</i></label>
                                <input type="file" name="img" id="img"
                                    class="form-control @error('img') is-invalid @enderror"
                                    value="{{ old('img') ?? $car->img }}">
                                @error('img')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mt-3">
                                <label for="optional"><i>Select Optional for your car:</i></label>
                                <div>
                                    @foreach ($optionals as $optional)
                                        <div class="form-check-inline">
                                            @if ($errors->any())
                                                <input type="checkbox" name="optionals[]"
                                                    id="optional-{{ $optional->id }}" class="form-check-input"
                                                    value="{{ $optional->id }}" @checked(is_array(old('optionals')) && in_array(old('optionals')))>
                                            @else
                                                <input type="checkbox" name="optionals[]"
                                                    id="optional-{{ $optional->id }}" class="form-check-input"
                                                    value="{{ $optional->id }}"
                                                    {{ $car->optionals->contains($optional->id) ? 'checked' : '' }}>
                                            @endif
                                            <label for="" class="form-check-label">{{ $optional->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-center mb-5">

                        {{-- BOTTONE DI INVIO  --}}
                        <div class="form-group mt-3">
                            <button type="submit" class="my_button px-3 py-2"><i class="fa-solid fa-plus"
                                    style="color: #ffffff;"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
