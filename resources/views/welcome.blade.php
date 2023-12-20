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
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="h-100 position-relative" data-aos="fade-up">
                        <img src="/assets/img/about-1.jpg" alt="about-1" class="img-fluid w-75 rounded"
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;" data-aos="fade-up">
                            <img src="/assets/img/about-2.jpg" alt="about-2" class="img-fluid w-100 rounded">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">
                        About KiloIT And It's Innovative IT Solutions
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.
                        Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus,
                        ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec
                        elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat
                        vestibulum, et malesuada augue laoreet.</p>
                    <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit
                        amet
                        leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque
                        quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                    <a href="#" class="btn btn-secondary rounded-pill px-5 py-3 text-white">
                        More Details
                    </a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
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
                                <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
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
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 fade-right" style="max-width: 600px;">
                <h5 class="text-primary">
                    Our Teams
                </h5>
                <h1 class="mb-3">
                    Meet our expert Teams
                </h1>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-1.jpg" alt="team-1"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-2.jpg" alt="team-2"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-3.jpg" alt="team-3"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-4.jpg" alt="team-4"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 fade-right" style="max-width: 600px;">
                <h5 class="text-primary">
                    Get In Touch
                </h5>
                <h1 class="mb-3">
                    Contact for any query
                </h1>
                <p class="mb-2">
                    The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a
                    few minutes. Just copy and paste the files, add a little code and you're done.
                </p>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="d-flex bg-light p-3 rounded" style="height: 8rem;">
                            <div class="flex-shrink-0 btn-square rounded-circle"
                                style="width: 64px; height: 64px; background-color: #26d48c;">
                                <i class="fas fa-map-marker-alt" style="font-size: 24px; color: #fff; padding: 22px;"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Address</h4>
                                <a href="#" class="h5">Aeon Mall Sen Sok, Phnom Penh</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="d-flex bg-light p-3 rounded" style="height: 8rem;">
                            <div class="flex-shrink-0 btn-square rounded-circle"
                                style="width: 64px; height: 64px; background-color: #26d48c;">
                                <i class="fas fa-map-marker-alt" style="font-size: 24px; color: #fff; padding: 22px;"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a href="#" class="h5">+0123 456 7890</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="d-flex bg-light p-3 rounded" style="height: 8rem;">
                            <div class="flex-shrink-0 btn-square rounded-circle"
                                style="width: 64px; height: 64px; background-color: #26d48c;">
                                <i class="fas fa-map-marker-alt" style="font-size: 24px; color: #fff; padding: 22px;"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a href="#" class="h5">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.331909645383!2d104.88279527574277!3d11.599669143468363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109522e1adbf683%3A0x3f4395cd35ec9617!2sAEON%20Mall%20Sen%20Sok!5e0!3m2!1sen!2skh!4v1702982781928!5m2!1sen!2skh"
                                width="485" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 h-100 rounded contact-form">
                            <div class="mb-4">
                                <input class="form-control border-0 py-3" type="text" name="name" id="name"
                                    placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input class="form-control border-0 py-3" type="email" name="email" id="name"
                                    placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input class="form-control border-0 py-3" type="text" name="project" id="project"
                                    placeholder="Your Project">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5 button-message" type="button">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
