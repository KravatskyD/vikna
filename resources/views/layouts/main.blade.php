@php
    $subPage = $subPage ?? false;
@endphp
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="assets/images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name') }}</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    @livewireStyles
</head>
<body @class(['sub_page' => $subPage])>
    <div class="hero_area">
        <header class="header_section long_section px-0">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                @php($notHomePage = request()->route()->getName() !== 'home')
                @if($notHomePage)
                    <a class="navbar-brand" href="{{ request()->route()->getName() !== 'home' ? route('home') : '#' }}">
                        <span>{{ config('app.name') }}</span>
                    </a>
                @else
                    <span class="navbar-brand">
                        <span>{{ config('app.name') }}</span>
                    </span>
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('calculator') }}">Калькулятор<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('about') }}">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('additional-products') }}">Супутні товари</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('certificates') }}">Сертифікати</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('our-projects') }}">Наші проекти</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactForm">Зв'язатися з нами</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('sub-header', '')
    </div>
    @yield('content', '')

    <!-- info section -->
    <section class="info_section long_section">
        <div class="container">
            <div class="contact_nav">
                <div class="contact_nav-item" >
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div>Зателефонуйте нам:</div>
                    <a href="tel:+3800938943511">+380 (093) 89 43511 Анна</a>
                    <a href="+3800501691182">+380 (050) 16 91182 Ніка</a>
                </div>
                <div class="contact_nav-item" href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <div>Напишіть нам:</div>
                    <div><a href="mailto:AVcompanyAV2020@gmail.com">AVcompanyAV2020@gmail.com</a></div>
                </div>
                <div class="contact_nav-item" href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div>Ми знаходимося:</div>
                    <div>м. Миколаїв, вул. 3 Поздовжня, 22</div>
                </div>
            </div>
        </div>
    </section>
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- End Google Map -->
@livewireScripts
</body>
</html>
