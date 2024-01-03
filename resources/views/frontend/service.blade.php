@extends('frontend.layouts.main')
@section('main-section')
    @push('title')
        <title>Services - Hotel Booking</title>
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
                style="background-image: url({{ asset('frontend/img/carousel-1.jpg') }});">
                <div class="container-fluid page-header-inner py-5">
                    <div class="container text-center pb-5">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('room') }}">Rooms</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-hotel fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Rooms & Appartment</h5>
                                <p class="text-body mb-0">Step into comfort and style with our thoughtfully designed rooms,
                                    offering a cozy retreat for a perfect night's rest.</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-utensils fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Food & Restaurant</h5>
                                <p class="text-body mb-0">Enjoy delicious meals in our cozy restaurants, where each dish is
                                    made with care and perfection.</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-spa fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Spa & Fitness</h5>
                                <p class="text-body mb-0">Stay fit and energized in our fitness center, equipped for your
                                    wellness journey, ensuring a healthy and invigorating stay.</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-swimmer fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Sports & Gaming</h5>
                                <p class="text-body mb-0">Unleash your competitive spirit with our sports facilities,
                                    offering a range of games for active fun and friendly competition.</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Event & Party</h5>
                                <p class="text-body mb-0">Celebrate special moments in our event spaces, where every detail
                                    is tailored to create unforgettable memories for your gatherings.</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <a class="service-item rounded">
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">GYM & Yoga</h5>
                                <p class="text-body mb-0">Recharge your body and mind in our serene yoga sessions, fostering
                                    a sense of peace and well-being amidst a calming atmosphere.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->





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
