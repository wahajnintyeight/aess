<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | AESS </title>
    <link rel="stylesheet preload" as="style" href="{{ asset('aess-assets/css/preload.min.css') }}" />
    <link rel="stylesheet preload" as="style" href="{{ asset('aess-assets/css/libs.min.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('aess-assets/css/index2.min.css') }}" />
</head>

<body>
    <header class="header primary-bg" data-page="home2">
        <div class="header_navbar">
            <div class="container d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                <a class="brand align-items-center justify-content-center text-sm" href="{{ route('landing') }}">

                    Arif Excellence <span class="highlight">School System</span>
                </a>
                <nav class="header_navbar-nav">
                    <ul class="header_navbar-nav_list">
                        <li class="list-item">
                            <button class="dropdown-trigger d-inline-flex align-items-center">
                                Home <i class="icon-chevron_right icon"></i>
                            </button>
                            <div class="dropdown-content">
                                <a class="link link--single" href="index.html" data-page="home">Home</a>
                                <a class="link link--single" href="index2.html" data-page="home2">Home 2</a>
                            </div>
                        </li>
                        <li class="list-item">
                            <a class="link link--single" href="{{ route('login') }}" data-page="about">Login</a>
                        </li>
                    </ul>
                </nav>
                <button class="hamburger">
                    <span class="line line--short"></span>
                    <span class="line"></span>
                    <span class="line line--short"></span>
                    <span class="line"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- HOME 2 CONTENT START  -->
    <main>
        @yield('content')
    </main>
    <!-- HOME 2 CONTENT END  -->
    <footer class="footer primary-bg">
        <div class="container">
            <div class="footer_main d-flex flex-wrap justify-content-md-between col-12">
                <div class="footer_main-block col-sm-12 col-xl-auto">
                    <a class="brand d-inline-flex align-items-center justify-content-center" href="index.html">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0V12L7.00543 6.48334L0 0Z" fill="#FFC631" />
                            <path d="M0 31L7.00543 24.5151L0 19V31Z" fill="#FFC631" />
                            <path d="M12.8208 14.3662L30.0233 0H19.9966L0 16L12.8208 14.3662Z" fill="#0DA574" />
                            <path d="M0 16L19.9966 31H30.0233L12.8208 17.5239L0 16Z" fill="#0DA574" />
                        </svg>

                        Axial <span class="highlight">Construct</span>
                    </a>
                    <p class="footer_main-block_subtitle footer_main-block_subtitle--brand">
                        Libero volutpat sed cras ornare arcu dui vivamus. Ac tortor dignissim convallis aenean et tortor
                        at risus
                        viverra
                    </p>
                </div>
                <div class="footer_main-block col-12 col-sm-6 col-md-auto">
                    <h4 class="footer_main-block_title">Contacts</h4>
                    <div class="group-wrapper d-flex justify-content-center">
                        <i class="icon-call icon"></i>
                        <div class="group d-flex flex-column">
                            <a href="tel:+13136453395">1 - 313 - 645 - 3395</a>
                            <a href="tel:+14699702609">1 - 469 - 970 - 2609</a>
                        </div>
                    </div>
                    <div class="group-wrapper d-flex justify-content-center">
                        <i class="icon-location icon"></i>
                        <div class="group d-flex flex-column">
                            <span>2047 Cyrus Viaduct</span>
                            <span>East Jadynchester</span>
                        </div>
                    </div>
                </div>
                <div class="footer_main-block col-12 col-sm-6 col-md-auto">
                    <h4 class="footer_main-block_title">Company</h4>
                    <ul class="footer_main-block_nav">
                        <li class="list-item">
                            <a class="link d-inline-flex align-items-center" href="about.html"> About </a>
                        </li>
                        <li class="list-item">
                            <a class="link d-inline-flex align-items-center" href="services.html"> Services </a>
                        </li>
                        <li class="list-item">
                            <a class="link d-inline-flex align-items-center" href="projects.html"> Projects </a>
                        </li>
                        <li class="list-item">
                            <a class="link d-inline-flex align-items-center" href="blog.html"> Blog </a>
                        </li>
                    </ul>
                </div>
                <div class="footer_main-block col-12 col-md-auto">
                    <h4 class="footer_main-block_title">Subscribe to Our News</h4>
                    <p class="footer_main-block_subtitle footer_main-block_subtitle--newsletter">
                        Find out about the last days and the latest promotions of our Corporation
                    </p>
                    <form class="footer_main-block_form d-flex flex-wrap flex-sm-nowrap" data-type="newsletter"
                        action="#" method="POST" name="newsletterForm" id="newsletterForm">
                        <input class="field required" name="newsletterEmail" id="newsletterEmail" type="text"
                            placeholder="Email" data-type="email" />
                        <button class="btn btn--submit btn--static" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div
                class="footer_secondary col-12 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                <p class="footer_secondary-copyright">
                    <span>Merkulove &copy; Axial Construct Template</span>
                    <span>All rights reserved Copyrights 2021</span>
                </p>
                <ul class="socials d-flex align-items-center justify-content-start socials--alt">
                    <li class="socials_item">
                        <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li class="socials_item">
                        <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li class="socials_item">
                        <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li class="socials_item">
                        <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                            <i class="icon-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <button id="scrollToTop" type="button">
        <i class="icon icon-arrow_right"></i>
    </button>
    <script src="{{ asset('aess-assets/js/common.min.js') }}"></script>
    <script src="{{ asset('aess-assets/js/index_alt.min.js') }}"></script>
</body>

</html>
