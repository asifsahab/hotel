<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="bg-primary rounded p-4">
                    <a href="{{ route('index') }}" class="d-flex align-items-center">
                        <img src="{{ asset('frontend/img/icon.png') }}" alt="Hotelier Logo" style="width: 40px"
                            class="me-2">
                        <h1 class="text-white text-uppercase mb-0">Hotelier</h1>
                    </a>

                    <p class="text-white mb-0">
                        <a href="{{ route('index') }}" class="text-dark fw-medium">Hotelier</a>, Discover comfort and
                        style at our hotels.Choose
                        from
                        various options and enjoy collaborations with top hotels.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>
                    <a href="https://www.google.com/maps?q=F7,Islamabad,Pakistan" target="_blank"
                        class="text-decoration-none text-light">F7, Islamabad, Pakistan</a>
                </p>
                <p class="mb-2">
                    <i class="fab fa-whatsapp me-3"></i>
                    <a href="tel:+923356303511" class="text-decoration-none text-light">0335-6303511</a> |
                    <a href="https://wa.me/+923356303511" target="_blank"
                        class="text-decoration-none text-light">WhatsApp</a>
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>
                    <a href="mailto:asif.sahab64@gmail.com"
                        class="text-decoration-none text-light">asif.sahab64@gmail.com</a>
                </p>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Quick Links</h6>

                        <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                        <a class="btn btn-link" href="{{ route('service') }}">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start py-2">
                    <p class="mb-0 text-muted">&copy; <span class="text-primary">Hotelier</span> {{ date('Y') }}.
                        All Rights Reserved.</p>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a class="me-3" href="www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href="www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="me-3" href="www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- Your JavaScript -->
<script>
    function hideCookieConsent() {
        document.getElementById('cookieConsent').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (!hasCookieConsent()) {
            document.getElementById('cookieConsent').style.display = 'block';
        }
    });

    function acceptCookies() {
        localStorage.setItem('cookieConsent', 'true');
        hideCookieConsent();
    }

    function rejectCookies() {
        localStorage.setItem('cookieConsent', 'false');
        hideCookieConsent();
    }

    function hasCookieConsent() {
        return localStorage.getItem('cookieConsent') === 'true' || localStorage.getItem('cookieConsent') === 'false';
    }



    $(document).ready(function(){
        
    });

</script>




</body>

</html>
