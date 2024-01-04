@extends('frontend.layouts.main')

@section('main-section')
    @push('title')
        <title>Contact - Hotel Booking</title>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('service') }}">Services</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: "Success",
                        text: "{{ session('success') }}",
                        icon: "success"
                    });
                });
            </script>
        @endif

            <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                        <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i><a
                                            href="mailto:asif.sahab64@gmail.com">asif.sahab64@gmail.com</p></a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">General</h6>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i><a
                                            href="mailto:asif.sahab64@gmail.com">asif.sahab64@gmail.com</p></a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i><a
                                            href="mailto:asif.sahab64@gmail.com">asif.sahab64@gmail.com</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <form action="{{ route('contact.submit') }}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    class="form-control" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="{{ old('subject') }}"
                                                    name="subject" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                                @error('subject')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px">{{ old('message') }}</textarea>
                                                <label for="message">Message</label>
                                                @error('message')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    </html>
@endsection
