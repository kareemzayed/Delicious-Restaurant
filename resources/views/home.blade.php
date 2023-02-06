<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home | Delicious</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="image/x-icon" href="{{ asset('assetsDashboard') }}/img/favicon/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('assetsResturant') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
        <div
            class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <i class="bi bi-phone d-flex align-items-center"><span>+201123991895</span></i>
            <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00
                    PM</span></i>
        </div>
    </section>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <h1><a href="index.html">Delicious</a></h1>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#events">Events</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @if (auth()->user()->is_admin)
                        @if (Route::has('dashboard'))
                            <li><a class="nav-link scrollto" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endif
                    @endif
                    <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width: 300px">
                            <div class="text-center">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
                                    style="color: black">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <form action="/user/two-factor-authentication" method="POST">
                                    @csrf

                                    @if (auth()->user()->two_factor_secret)
                                        @method('DELETE')
                                        <div class="pb-3">
                                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                        </div>
                                        <button class="btn btn-danger" style="font-size: 13px">Disable 2F Auth</button>
                                    @else
                                        <button class="btn btn-primary" style="font-size: 13px">Enable 2F Auth</button>
                                    @endif
                                </form>
                            </div>

                        </div>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

        </div>
    </header>

    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style="background-image: url({{ asset('assetsResturant') }}/img/slide/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Restaurant
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                        Menu</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="background-image: url({{ asset('assetsResturant') }}/img/slide/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                        Menu</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                        style="background-image: url({{ asset('assetsResturant') }}/img/slide/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>

    <main id="main">
        <section id="book-a-table" class="book-a-table">
            <div class="container">

                <div class="section-title">
                    <h2>Book a <span>Table</span></h2>
                    <p>Reserve your seat with us, Just enter your information and photo to get to know you.</p>
                </div>

                <form action="{{ route('reverseTable') }}" method="POST" enctype="multipart/form-data"
                    class="php-email-form">
                    @csrf

                    <div class="text-center">
                        @if (Session::has('booked'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('booked') }}
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name"
                                class="form-control  @error('name') is-invalid @enderror" id="name"
                                placeholder="Your Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="Your Email" data-rule="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                                name="phone" id="phone" placeholder="Your Phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" name="date"
                                class="form-control  @error('date') is-invalid @enderror" id="date"
                                placeholder="Date">
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control  @error('time') is-invalid @enderror"
                                name="time" id="time" placeholder="Time">
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control  @error('people') is-invalid @enderror"
                                name="people" id="people" placeholder="# of people">
                            @error('people')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control  @error('card') is-invalid @enderror"
                                name="card" id="card" placeholder="Credit card number">
                            @error('card')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="file" class="form-control  @error('photo') is-invalid @enderror"
                                name="photo" id="photo">
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                            <div class="validate"></div>
                        </div>

                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="5"
                            placeholder="Message"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                        <div class="validate"></div>
                    </div>

                    <div class="text-center"><button type="submit">Book</button></div>
                </form>

            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <h3>Delicious</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('assetsResturant') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsResturant') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assetsResturant') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assetsResturant') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assetsResturant') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assetsResturant') }}/js/main.js"></script>

</body>
</html>