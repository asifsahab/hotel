@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Booking - Hotel Booking</title>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('room') }}">Rooms</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->





            <!-- Booking Start -->
            <div class="container-xxl py-5">
                @if (isset($room))
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                        <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                            src="{{ asset('storage/images/' . $room->image) }}" style="margin-top: 25%;">
                                    </div>
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                            src="{{ asset('storage/images/' . $room->image) }}">
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                            src="{{ asset('storage/images/' . $room->image) }}">
                                    </div>
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                            src="{{ asset('storage/images/' . $room->image) }}">
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <form action="{{ route('bookingsubmit') }}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="hotelname" class="form-control" id="hotelname"
                                                    placeholder="Your hotelname" readonly value="{{ $room->hotelname }}">
                                                <label for="hotelname">Hotel Name</label>
                                            </div>
                                            @error('hotelname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="price" class="form-control" id="price"
                                                    placeholder="Your price" readonly value="{{ $room->price }}">
                                                <label for="price">Price</label>
                                            </div>
                                            @error('hotelname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                                <input type="date" name="checkin"
                                                    class="form-control datetimepicker-input" id="checkin"
                                                    placeholder="Check In" />
                                                <label for="checkin">Check-In</label>
                                                @error('checkin')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating date" id="date4" data-target-input="nearest">
                                                <input type="date" name="checkout"
                                                    class="form-control datetimepicker-input" id="checkout"
                                                    placeholder="Check Out" />
                                                <label for="checkout">Check-out</label>
                                                @error('checkout')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="city"
                                                    placeholder="Your city" name="city" readonly
                                                    value="{{ $room->city->city }}">
                                                <label for="city">city</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="category"
                                                    placeholder="Your category" name="category" readonly
                                                    value="{{ $room->category->name }}">
                                                <label for="category">category</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="person"
                                                    placeholder="Your person" name="person" readonly
                                                    value="{{ $room->person }}">
                                                <label for="person">Person</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="room"
                                                    placeholder="Your room" name="room" readonly
                                                    value="{{ $room->room }}">
                                                <label for="room">room</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="request" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                                <label for="message">Special Request</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- Booking End -->


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
