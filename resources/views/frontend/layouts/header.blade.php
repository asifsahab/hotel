<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Favicon -->
     <link href="{{asset('frontend/img/icon.png')}}" rel="icon">
     @stack('title')

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="{{route('index')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <a href="mailto:asif.sahab64@gmail.com">
                                <p class="mb-0">asif.sahab64@gmail.com</p>
                            </a>

                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <a href="tel:+923356303511">
                                <p class="mb-0">+92 335 6303511</p>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href="www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href="www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="{{route('index')}}" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                            <a href="{{route('room')}}" class="nav-item nav-link">Rooms</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{route('booking')}}" class="dropdown-item">Booking</a>
                                    <a href="{{route('team')}}" class="dropdown-item">Our Team</a>
                                    <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
</body>
</html>
