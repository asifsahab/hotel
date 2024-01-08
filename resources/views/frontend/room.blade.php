@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Room - Hotel Booking</title>
    @endpush

    <body>
        <div class="container-xxl bg-white p-0">

            <!-- Page Header Start -->
            <div class="container-fluid page-header mb-5 p-0"
                style="background-image: url({{ asset('frontend/img/carousel-1.jpg') }});">
                <div class="container-fluid page-header-inner py-5">
                    <div class="container text-center pb-5">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('booking') }}">Booking</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Room Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                    </div>
                    <div class="row g-4">
                        @foreach ($room as $roomdata)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative d-flex room-container">
                                        <img class="img-fluid room-image"
                                            src="{{ asset('storage/images/' . $roomdata->image) }}" alt="">
                                        <small class="small-tag">
                                            {{ $roomdata->price }} PKR / Night
                                        </small>
                                    </div>

                                    <div class="p-4 mt-2">
                                        <div class="d-flex flex-column mb-3">
                                            <div class="mb-2">
                                                <b style="font-size:25px; ">{{ $roomdata->hotelname }} </b><b
                                                    style="font-size:15px; ">- {{ $roomdata->city->city }}</b>
                                            </div>
                                            <div>
                                                <a href="{{ 'https://www.google.com/maps/search/?api=1&query=' . urlencode($roomdata->address) }}"
                                                    target="_blank">
                                                    {{ $roomdata->address }} - show on map
                                                </a><br>
                                                <p>{{ $roomdata->category->name }}</p>
                                            </div>

                                        </div>

                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-bed text-primary me-2"></i>{{ $roomdata->room }}
                                                Room</small>
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-user text-primary me-2"></i>{{ $roomdata->person }}
                                                Persons</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        </div>
                                        <p class="text-body mb-3">{{ $roomdata->description }}</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4"
                                                href="{{ route('detailroom', $roomdata->hotelname) }}">View
                                                Detail</a>
                                            @if ($roomdata->status == 1)
                                                <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                                    href="{{ route('roombooking', $roomdata->hotelname) }}">Book Now</a>
                                            @else
                                                <a class="btn btn-sm btn-dark disabled rounded py-2 px-4"
                                                    href="{{ route('roombooking', $roomdata->hotelname) }}">Book Now</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Room End -->



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
