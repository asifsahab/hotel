@extends('frontend.layouts.main')
@section('main-section')
    @push('title')
        <title>Testimonial - Hotel Booking</title>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('team') }}">Our Team</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Testimonial Start -->
            <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s"
                style="margin-bottom: 90px;">
                <div class="container">
                    <div class="owl-carousel testimonial-carousel py-5">
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>Absolutely loved my stay! The room was so cozy, and the staff went above and beyond to make
                                me feel at home. Can't wait to come back.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded"
                                    src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Emily</h6>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>Impressed by the impeccable service and attention to detail. The apartment was spacious and
                                beautifully decorated. A truly delightful stay.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded"
                                    src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Michael Johnson</h6>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>Had a wonderful time at this hotel! The room was clean and comfortable, and the staff was
                                incredibly friendly. Overall, a fantastic experience—highly recommend.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded"
                                    src="{{ asset('frontend/img/testimonial-3.jpg') }}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">David</h6>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


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
