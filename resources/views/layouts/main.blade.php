<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home One || Finlon || Loan & Credit Repair HTML Template</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Finlon - Loan & Credit Repair HTML Template" />
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.c') }}ss">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/finlon-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/assets/owl.theme.default.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/finlon.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar__info">
                    <a href="#"><i class="icon-pin"></i> 88 Road Broklyn Golden Street. New York</a>
                    <a href="mailto:needhelp@company.com"><i class="icon-email"></i> needhelp@company.com</a>
                </div><!-- /.topbar__info -->
                <div class="topbar__links">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Sign Up</a>
                    <a href="faqs.html">FAQs</a>
                </div><!-- /.topbar__links -->
                <div class="topbar__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div><!-- /.topbar__social -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar -->
        <nav class="main-menu">
            <div class="container-fluid">
                <div class="main-menu__logo">

                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-1" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-2" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>


                    <a href="index.html">
                        <img src="assets/images/logo-dark.png" width="140" height="51" alt="Finlon">
                    </a>
                </div><!-- /.main-menu__logo -->
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('services')  }}">Services</a>
                        </li>

                        <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="our-team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="credit-repair.html">Credit Repair</a></li>
                                <li><a href="credit-audit.html">Credit Audit</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="faqs.html">Faqs</a></li>
                                <li><a href="apply-now.html">Apply Now</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Features</a>
                            <ul>
                                <li><a href="personal-loan-calculator.html">Personal Loan Calcualtor</a></li>
                                <li><a href="loan-eligibility.html">Loan Eligibility</a></li>
                                <li><a href="home-loan-calculator.html">Home Loan Calcualtor</a></li>
                                <li><a href="home-loan-eligibility-calculator.html">Home Loan Eligibility</a></li>
                                <li><a href="compare.html">Compare Loan EMI</a></li>
                                <li><a href="monthly-loan-calculator.html">Monthly Calculator</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('contact')  }}">Contact</a></li>
                    </ul>
                </div><!-- /.main-menu__nav -->
                <div class="main-menu__right">
                    <a href="#" class="main-menu__toggler mobile-nav__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="#" class="main-menu__search search-toggler">
                        <i class="icon-magnifying-glass"></i>
                    </a>
                    <a href="apply-now.html" class="thm-btn main-menu__btn">Request Loan</a><!-- /.thm-btn -->
                    <a href="tel:926668880000" class="main-menu__contact">
                        <span class="main-menu__contact__icon">
                            <i class="icon-phone"></i>
                        </span><!-- /.main-menu__contact__icon -->
                        <span class="main-menu__contact__text">
                            <strong>92 666 888 0000</strong>
                            Mon to Fri: 9 am to 6 pm
                        </span>
                    </a><!-- /.main-menu__contact -->
                </div><!-- /.main-menu__right -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- /.main-menu -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <footer class="main-footer">
            <div class="container">
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="assets/images/logo-light.png" alt="finlon" width="140"
                                    height="51">
                            </a>
                            <p class="footer-widget__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                hac
                                habitasse platea dictumst.</p>
                            <ul class="list-unstyled footer-widget__info">
                                <li>
                                    <i class="icon-email"></i>
                                    <a href="mailto:needhelp@finlon.com">needhelp@finlon.com</a>
                                </li>
                                <li>
                                    <i class="icon-telephone"></i>
                                    <a href="tel:926668880000">92 666 888 0000 </a>
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget footer-widget--links">
                            <h3 class="footer-widget__title">
                                Explore
                            </h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Our Services</a></li>
                                <li><a href="blog.html">Latest News</a></li>
                                <li><a href="apply-now.html">Apply for Loan</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul><!-- /.list-unstyled footer-widget__menu -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-widget--time">
                            <h3 class="footer-widget__title">
                                Timing
                            </h3><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">
                                Mon Fri: 7:00am - 6:00pm <br> Saturday: 9:00am - 5:00pm <br> Sunday: Closed
                            </p>
                            <div class="footer-widget__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.footer-widget__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-widget--newsletter">
                            <h3 class="footer-widget__title">
                                Newsletter
                            </h3><!-- /.footer-widget__title -->
                            <form class="footer-widget__mailchimp">
                                <input type="email" placeholder="Email address">
                                <p class="footer-widget__mailchimp__text">
                                    <i class="fa fa-check"></i>
                                    I agree to all your terms and policies
                                </p><!-- /.footer-widget__mailchimp -->
                            </form><!-- /.footer-widget__mailchimp -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.main-footer -->
        <div class="bottom-footer">
            <div class="container">
                <p class="bottom-footer__text text-center">Copyright &copy; 2022 All Rights Reserved.</p>
                <!-- /.bottom-footer__text -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-email"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@finlon.com</a>
                </li>
                <li>
                    <i class="icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->

            <div class="mobile-nav__social">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/finlon.js') }}"></script>
</body>

</html>
