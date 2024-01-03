@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Room Detail - Hotel Booking</title>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Room Detail</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>

                                <li class="breadcrumb-item text-white active" aria-current="page">Room Detail</li>
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
                        <h1 class="mb-5">Explore Our Room <span class="text-primary text-uppercase">Detail</span></h1>
                    </div>
                    <div class="row">
                        @if (isset($room))
                            <!-- Large Image and Room Details -->
                            <div class="col-md-6">




                                <h2 class="mb-3">{{ $room->hotelname }}</h2>
                                <img src="{{ asset('storage/images/' . $room->image) }}" alt="{{ $room->name }}"
                                    class="img-fluid mb-4">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="lead mb-0">
                                        <i class="bi bi-geo-alt-fill"></i> {{ $room->city->city }}
                                    </p>
                                    <h1>

                                        @if ($room->status == 0)
                                            <b class="text-light bg-danger">Un-Available</b>
                                        @endif

                                    </h1>

                                    <p class="lead mb-0">
                                        <i class="bi bi-tag-fill"></i> {{ $room->category->name }}
                                    </p>
                                </div>
                                <a href=""><i class="bi bi-geo-alt-fill"></i> {{ $room->address }}</a><br>
                                <p class="lead mb-3">
                                    <i class="bi bi-door-open-fill"></i> {{ $room->room }} - <i
                                        class="bi bi-person-fill"></i> {{ $room->person }}
                                </p>

                                <p class="lead mb-3">
                                    <i class="bi bi-info-circle-fill"></i> {{ $room->description }}
                                </p>
                                <p class="lead mb-3">
                                    <i class="bi bi-clock-fill"></i> Check-in: {{ $room->checkin }}
                                </p>
                                <p class="lead mb-3">
                                    <i class="bi bi-clock-fill"></i> Check-out: {{ $room->checkout }}
                                </p>
                                <p class="text-primary h3">
                                    <i class="bi bi-currency-dollar"></i> RS{{ $room->price }}/-
                                </p>
                                <!-- Add other room details here -->
                                <div class="d-flex justify-content-between">
                                    @if ($room->status == 1)
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4"
                                            href="{{ route('roombooking', $room->hotelname) }}">Book
                                            Now</a>
                                    @else
                                        <a class="btn btn-sm btn-primary disabled rounded py-2 px-4"
                                            href="{{ route('roombooking', $room->hotelname) }}">Book
                                            Now</a>
                                    @endif
                                </div>
                            </div>
                        @endif
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
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                        class="bi bi-arrow-up"></i></a>
            </div>

    </body>

    </html>
@endsection
