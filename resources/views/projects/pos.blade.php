@extends('portfolio_app')
@section('content')
    <div class="container">
        <h2 class="main-title text-center my-4">POS System Case Study</h2>

        <!-- Image Slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/pos_img_1.jpg') }}" class="d-block w-100" alt="POS System 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/pos_img_2.jpg') }}" class="d-block w-100" alt="POS System 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/pos_img_3.jpg') }}" class="d-block w-100" alt="POS System 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Case Study Section -->
        <div class="case-study mt-5">
            <h3>Case Study: POS System</h3>
            <p>
                The POS system was developed to improve the efficiency of retail operations. It features inventory management, transaction processing, and a responsive interface...
            </p>
            <!-- Add more details about the case study here -->
        </div>
    </div>
@endsection
