@extends('layouts.app')
@section('head')
    <title>Project</title>
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">
                    Our Recent Projects
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="#">Project</a>
                        </li>
                    </ol>
                </nav>
            </div>
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

    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 fade-right" style="max-width: 600px;">
                <h5 class="text-primary">
                    Project
                </h5>
                <h1 class="mb-3">
                    Our Recent Projects
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-1.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Web Design</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-2.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-3.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Mobile</h4>
                                    <p class="m-0 text-white">Upcoming Devices</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-4.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Web Design</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-5.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="/assets/img/project-6.jpg" alt="project-1" class="img-fluid w-100 rounded">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-green">Mobile</h4>
                                    <p class="m-0 text-white">Upcoming Devices</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
