@extends('layouts.app')
@section('head')
    <title>Blog</title>
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">
                    Our Blogs
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
                            <a href="#">Blog</a>
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
                    Our Blogs
                </h5>
                <h1 class="mb-3">
                    Latest Blog & News
                </h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="/assets/img/blog-1.jpg" alt="blog-1" class="img-fluid w-100 rounded-top">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">
                            Frontend
                        </span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn-secondary btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn-secondary px-4 py-3 rounded-pill">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">
                                        Share
                                        <i class="fa-regular fa-arrow-right ms-3"></i>
                                    </p>
                                </div>
                                <div class="blog-icon-2">
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-facebook-f text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-x-twitter text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-instagram text-white"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="btn-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="/assets/img/admin.jpg" alt="guyinasuit"
                                class="img-fluid rounded-circle border border-4 border-white mb-3">
                            <h5>By Daniel Martin</h5>
                            <span class="text-green">24 March 2023</span>
                            <p class="py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque commodi placeat deleniti
                                labore
                                minima obcaecati, soluta inventore qui voluptas tempora veritatis officiis quos tenetur
                                aperiam
                                harum nobis eveniet perspiciatis natus?
                            </p>
                        </div>
                        <div
                            class="blog-commment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white">
                                <small><i class="fa-regular fa-share text-green"></i>
                                    5324 Share
                                </small>
                            </a>
                            <a href="#" class="text-white">
                                <small><i class="fa-sharp fa-solid fa-comment text-green"></i>
                                    5324 Comments
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="/assets/img/blog-2.jpg" alt="blog-1" class="img-fluid w-100 rounded-top">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">
                            Backend
                        </span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn-secondary btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn-secondary px-4 py-3 rounded-pill">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">
                                        Share
                                        <i class="fa-regular fa-arrow-right ms-3"></i>
                                    </p>
                                </div>
                                <div class="blog-icon-2">
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-facebook-f text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-x-twitter text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-instagram text-white"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="btn-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="/assets/img/admin.jpg" alt="guyinasuit"
                                class="img-fluid rounded-circle border border-4 border-white mb-3">
                            <h5>By Daniel Martin</h5>
                            <span class="text-green">24 March 2023</span>
                            <p class="py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque commodi placeat deleniti
                                labore
                                minima obcaecati, soluta inventore qui voluptas tempora veritatis officiis quos tenetur
                                aperiam
                                harum nobis eveniet perspiciatis natus?
                            </p>
                        </div>
                        <div
                            class="blog-commment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white">
                                <small><i class="fa-regular fa-share text-green"></i>
                                    5324 Share
                                </small>
                            </a>
                            <a href="#" class="text-white">
                                <small><i class="fa-sharp fa-solid fa-comment text-green"></i>
                                    5324 Comments
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="/assets/img/blog-3.jpg" alt="blog-1" class="img-fluid w-100 rounded-top">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">
                            Flutter
                        </span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn-secondary btn px-3 rounded-pill my-auto">
                                <a href="#" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn-secondary px-4 py-3 rounded-pill">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">
                                        Share
                                        <i class="fa-regular fa-arrow-right ms-3"></i>
                                    </p>
                                </div>
                                <div class="blog-icon-2">
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-facebook-f text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-x-twitter text-white"></i>
                                    </a>
                                    <a class="btn me-1">
                                        <i class="fa-brands fa-instagram text-white"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="btn-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="/assets/img/admin.jpg" alt="guyinasuit"
                                class="img-fluid rounded-circle border border-4 border-white mb-3">
                            <h5>By Daniel Martin</h5>
                            <span class="text-green">24 March 2023</span>
                            <p class="py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque commodi placeat deleniti
                                labore
                                minima obcaecati, soluta inventore qui voluptas tempora veritatis officiis quos tenetur
                                aperiam
                                harum nobis eveniet perspiciatis natus?
                            </p>
                        </div>
                        <div
                            class="blog-commment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white">
                                <small><i class="fa-regular fa-share text-green"></i>
                                    5324 Share
                                </small>
                            </a>
                            <a href="#" class="text-white">
                                <small><i class="fa-sharp fa-solid fa-comment text-green"></i>
                                    5324 Comments
                                </small>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
