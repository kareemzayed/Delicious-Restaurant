<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome Page | Delicious Resturant</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="image/x-icon" href="{{ asset('assetsDashboard') }}/img/favicon/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('assetsWelcome') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">kareemzayed89@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+201123991895</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#">Delicious<span>.</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    @if (Route::has('login'))
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li><a class="nav-link scrollto" href="{{ route('register') }}">Sign Up</a></li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Welcome to <span>Delicious Resturant</span></h1>
            <h2>We ara here to provide you with the best delicious meals and satisfy your hunger.</h2>
            <div class="d-flex">
                @if (Route::has('home'))
                    <a href="{{ route('home') }}" class="btn-get-started scrollto">Make Your Order Now</a>
                @endif
            </div>
        </div>
    </section>

    <main id="main">
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <h3>Our Hardworking <span>Team</span></h3>
                    <p>We ara a team at the faculty of Computer and Information Science, Ain Shams University, IS
                        Department</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assetsWelcome') }}/img/team/team-1.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#team">Our Team</a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('assetsWelcome') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('assetsWelcome') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assetsWelcome') }}/js/main.js"></script>
</body>

</html>
