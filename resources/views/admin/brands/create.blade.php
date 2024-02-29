@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <form action="{{ route('admin.brands.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name" class="control-label">Name:</label>
                        <input required type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="office-number">Office Number:</label>
                        <input required type="text" name="office_number" id="office_number" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email:</label>
                        <input required type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="website">Website:</label>
                        <input required type="text" name="website" id="website" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="office-address">Office Address:</label>
                        <input required type="text" name="office_address" id="office_address" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
