@extends('backend.Layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Notifications</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('bookingview') }}">Notification</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
        </section>

        <div class="container">
            @foreach ($data as $booking)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Booking Information</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $booking->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $booking->email }}</li>
                        <li class="list-group-item"><strong>Hotel Name:</strong> {{ $booking->hotelname }}</li>
                        <li class="list-group-item"><strong>Checkin:</strong> {{ $booking->checkin }}</li>
                        <li class="list-group-item"><strong>Checkout:</strong> {{ $booking->checkout }}</li>
                        <li class="list-group-item"><strong>Price:</strong> {{ $booking->price }}</li>
                        <li class="list-group-item"><strong>City:</strong> {{ $booking->city }}</li>
                        <li class="list-group-item"><strong>Special Request:</strong> {{ $booking->request }}</li>
                    </ul>
                </div>
                <div class="card-footer text-muted">
                    Received on {{ $booking->created_at->format('F d, Y \a\t h:i A') }}
                </div>
            </div>
            @endforeach
        </div>




    </div>
@endsection
