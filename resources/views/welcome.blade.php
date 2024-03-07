@extends('layouts.admin')
@section('content')
    <div>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url('https://www.pixground.com/ferrari-sf90-xx-stradale-supercar-4k-wallpaper/?download-img=4k')">

                </div>
                <div class="carousel-item" style="background-image: url('https://images8.alphacoders.com/116/1168080.jpg')">

                </div>
                <div class="carousel-item"
                    style="background-image: url('https://wallpapercosmos.com/w/full/3/b/f/1704762-3840x2160-desktop-4k-fiat-panda-background-image.jpg')">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold">Bool3Shop</h1>
            <p class="lead">Il tuo concessionario preferito.</p>
        </div>


    </section>
@endsection
