@extends('layouts.app')
@section('head')
    <title>Contact</title>

@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">
                    Contact Us
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
                            <a href="#">Contact</a>
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
