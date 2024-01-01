@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Home - Hotel Booking</title>
    @endpush

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Carousel Start -->
            <div class="container-fluid p-0 mb-5">
                <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury
                                        Living</h6>
                                    <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious
                                        Hotels</h1>
                                    <a href="{{ route('room') }}"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                    <a href="{{ route('booking') }}"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="{{ asset('frontend/img/carousel-2.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury
                                        Living</h6>
                                    <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious
                                        Hotels</h1>
                                    <a href="{{ route('room') }}"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                    <a href="{{ route('booking') }}"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->


            <!-- Booking Start -->
            <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="bg-white shadow " style="padding: 35px;">
                        <form action="{{route('search')}}" method="POST">
                            @csrf
                        <div class="row g-2">
                            <div class="col-md-10 ">
                                <div class="row g-2">

                                    <div class="col-md-4">
                                        <select name="city" class="form-select">
                                            <option selected disabled >Select Destination</option>
                                            @if (isset($city))
                                                @foreach ($city as $cityname)
                                                    <option  value="{{ $cityname->id }}">{{ $cityname->city }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" placeholder="Enter Persons" class="form-control"
                                            name="persons">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="enterroom" id="quantity" class="form-control" placeholder="Enter Room">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-2">
                                        <div class="date">
                                            <input type="date" name="checkin" class="form-control" placeholder="Check In" />
                                        </div>
                                        <small class="text-muted">Check-In</small>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <div class="date">
                                            <input type="date" name="checkout" class="form-control" placeholder="Check Out" />
                                        </div>
                                        <small class="text-muted">Check-Out</small>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 ">
                                <button type="submit" class="btn btn-primary w-100 mt-5 rounded-pill"><i class="fas fa-search"></i>
                                    &nbsp;Search</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking End -->


            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                            <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1>
                            <p class="mb-4">Discover comfort and style at our hotels. Impeccable service, cozy rooms, and
                                a touch of luxury. Choose from various options and enjoy collaborations with top hotels.</p>
                            <div class="row g-3 pb-4">
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">{{$totalroom}}</h2>
                                            <p class="mb-0">Rooms</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                            <p class="mb-0">Staffs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                            <p class="mb-0">Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                        src="{{ asset('frontend/img/about-1.jpg') }}" style="margin-top: 25%;">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                        src="{{ asset('frontend/img/about-2.jpg') }}">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                        src="{{ asset('frontend/img/about-3.jpg') }}">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                        src="{{ asset('frontend/img/about-4.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


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
                                    <img class="img-fluid room-image" src="{{ asset('storage/images/' . $roomdata->image) }}" alt="">
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
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View
                                                Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                </div>
            </div>
            <!-- Room End -->


            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="service-item rounded" >
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
                            <a class="service-item rounded" >
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
                            <a class="service-item rounded" >
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
                            <a class="service-item rounded" >
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
                            <a class="service-item rounded" >
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
                            <a class="service-item rounded" >
                                <div class="service-icon bg-transparent border rounded p-1">
                                    <div
                                        class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                        <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">GYM & Yoga</h5>
                                <p class="text-body mb-0">Recharge your body and mind in our serene yoga sessions,
                                    fostering a sense of peace and well-being amidst a calming atmosphere.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->





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
