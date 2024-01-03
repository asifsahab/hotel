@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Team - Hotel Booking</title>
    @endpush

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <!-- Replace 'path/to/spinner.gif' with the actual path to your GIF file -->
                <img src="https://media2.giphy.com/media/I56huqDSNXmW3kIcXv/giphy.gif?cid=6c09b952fdgpglrq3mnwkghdtbybvoy2e90jghs3bidhsw13&ep=v1_stickers_related&rid=giphy.gif&ct=s"
                    alt="Loading..." class="img-fluid">
            </div>
            <!-- Spinner End -->

            <!-- Page Header Start -->
            <div class="container-fluid page-header mb-5 p-0"
                style="background-image: url({{ asset('frontend/img/carousel-1.jpg') }} );">
                <div class="container-fluid page-header-inner py-5">
                    <div class="container text-center pb-5">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded shadow overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('frontend/img/team-1.jpg') }}" alt="">
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Daniel Carter</h5>
                                    <small>Spa and Wellness Coordinator</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rounded shadow overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('frontend/img/team-2.jpg') }}" alt="">
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Jason Reynolds</h5>
                                    <small>Head Chef</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="rounded shadow overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('frontend/img/team-3.jpg') }}" alt="">
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">David Foster</h5>
                                    <small>Fitness Center Supervisor</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="rounded shadow overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('frontend/img/team-4.jpg') }}" alt="">
                                </div>
                                <div class="text-center p-4 mt-3">
                                    <h5 class="fw-bold mb-0">Andrew Turner</h5>
                                    <small>Events Coordinator</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Newsletter Start -->
            <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container-xxl py-5">

                </div>
            </div>
            <!-- Newsletter Start -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

    </body>

    </html>
@endsection
