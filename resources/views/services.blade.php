@extends('layouts.app')
@section('head')
    <title>Services</title>
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">
                    Our Services
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
                            <a href="#">Services</a>
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
                    Our Services
                </h5>
                <h1 class="mb-3">
                    Services Built Specifically For Your Business
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-sharp fa-solid fa-code text-primary"></i>
                                <h4 class="mb-3">Web Design</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-sharp fa-solid fa-file-code text-primary"></i>
                                <h4 class="mb-3">Web Development</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-regular fa-arrow-up-right-from-square text-primary"></i>
                                <h4 class="mb-3">UI/UX Design</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-duotone fa-user-secret text-primary"></i>
                                <h4 class="mb-3">Web Security</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-solid fa-envelope-open text-primary"></i>
                                <h4 class="mb-3">Digital Marketing</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-7x mb-4 fa-solid fa-laptop-mobile text-primary"></i>
                                <h4 class="mb-3">Programming</h4>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                                    necessitatibus asperiores cum numquam beatae. Iure soluta eos harum, tempora quae est
                                    quaerat delectus, eaque cupiditate optio ratione veniam at dolorem!</p>
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
