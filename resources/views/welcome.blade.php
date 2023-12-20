@extends('layouts.app')
@section('head')
    <title>Homepage</title>
@endsection

@section('content')
    <div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="/assets/img/carousel-1.jpg" class="d-block w-100" alt="carousel-1">
                    <div class="carousel-caption">
                        <div class="container carousel-content text-center">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                An Innovative IT Solutions Agency
                            </h1>
                            <p class="mb-4 text-white" style="font-size: 1.25rem;">
                                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam
                                dolor eget urna ultricies tincidunt.
                            </p>
                            <a href="#" class="me-2">
                                <button class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1"
                                    type="button">Read More</button>
                            </a>
                            <a href="#" class="ms-2">
                                <button class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2"
                                    type="button">Contact Us</button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carousel-2.jpg" class="d-block w-100" alt="carousel-2">
                    <div class="carousel-caption">
                        <div class="container carousel-content text-center">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">
                                An Innovative IT Solutions Agency
                            </h1>
                            <p class="mb-4 text-white" style="font-size: 1.25rem;">
                                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam
                                dolor eget urna ultricies tincidunt.
                            </p>
                            <a href="#" class="me-2">
                                <button class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1"
                                    type="button">Read More</button>
                            </a>
                            <a href="#" class="ms-2">
                                <button class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2"
                                    type="button">Contact Us</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid fact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">
                            Success in getting happy customer
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">
                            Thousands of successful business
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">
                            Total clients who love KiloIT
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">
                            Stars reviews given by satisfied clients.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
