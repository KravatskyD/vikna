@extends('layouts.main')
@section('sub-header')
    <!-- slider section -->
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-head-slider/1.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-head-slider/2.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-head-slider/3.jpeg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-head-slider/4.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-head-slider/5.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel" data-slide-to="1"></li>
                <li data-target="#customCarousel" data-slide-to="2"></li>
                <li data-target="#customCarousel" data-slide-to="3"></li>
                <li data-target="#customCarousel" data-slide-to="4"></li>
            </ol>
        </div>
    </section>
    <!-- end slider section -->
@endsection
@section('content')
    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Конструкції стандартного розміру
                </h2>
                <p>
                    *Вартість виробу не включає монтаж, підвіконня, відлив, сітку
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Вікно на 2 частини
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 4650 грн*
                                </h6>
                                <span>
                                    1300х1400мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/2.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Вікно на 3 частини
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 6450 грн*
                                </h6>
                                <span>
                                    2000х1400мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/3.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Балконний блок
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 7550 грн*
                                </h6>
                                <span>
                                    2000х2100мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/4.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Лоджія
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 10950 грн*
                                </h6>
                                <span>
                                    3000х1500мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/5.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Двері міжкімнатні
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 4000 грн*
                                </h6>
                                <span>
                                    700х2000мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/products/6.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Двері вхідні
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    Ціна: від 6950 грн*
                                </h6>
                                <span>
                                    900х2000мм
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end furniture section -->


    <!-- about section -->

    <section class="about_section layout_padding long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Про нас
                            </h2>
                        </div>
                        <p><span lang="uk-UA">ВІКНА ТА ДВЕРІ ВІД ВИРОБНИКА</span></p>
                        <ul>
                            <li>
                                <p><span lang="uk-UA">гарантована якість</span></p>
                            </li>
                            <li>
                                <p><span lang="uk-UA">доступні ціни</span></p>
                            </li>
                            <li>
                                <p><span lang="uk-UA">професійний монтаж</span></p>
                            </li>
                        </ul>
                        <a href="{{ route('about') }}">
                            Дізнатися більше
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- client section -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Матеріали і комплектуючі
                </h2>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <div class="wysiwyg js-wysiwyg wysiwyg--seo"><div class="elementor-element elementor-element-be6e055 elementor-widget elementor-widget-heading" data-id="be6e055" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-default">Framex 58</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4be91b4 elementor-widget elementor-widget-spacer" data-id="4be91b4" data-element_type="widget" data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner">Віконна ПВХ система</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-31016d8 elementor-widget elementor-widget-text-editor" data-id="31016d8" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Класична профільна система з ПВХ, що надає набір найнеобхідніших споживчих якостей за доступною ціною. Розрахована на виготовлення вікон будь-яких форм та типів відкривання</p>
                                                    <p><img src="https://framex.ua/wp-content/webp-express/webp-images/uploads/elementor/thumbs/framex-icon-kilkist-kamer-pz47v03rtmcyv1yoexcav0zhoxab8j8i7bqo7jl7q0.png.webp">&nbsp; <span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.25em;">Кількість камер</span> - </strong></span><span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.5em;">4</span></strong></span></p>
                                                    <p><span style="color: #999999; font-size: 1.25em;"><strong><img src="https://framex.ua/wp-content/webp-express/webp-images/uploads/elementor/thumbs/framex-icon-montajna-glubuna-pz47vks7zz59yh4n26a3dvrmregdxvilm63crmqjx4.png.webp"> &nbsp;<span style="font-size: 1.25em;">Монтажна глибина</span>&nbsp; - </strong></span><span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.5em;">58</span> мм</strong></span></p>
                                                    <p><span style="color: #999999; font-size: 1.25em;"><strong><img src="https://framex.ua/wp-content/webp-express/webp-images/uploads/elementor/thumbs/framex-icon-systema-ushilnennya-pz47wki37oi67nor9lpx0mr5c1kc2dgef2vt059lco.png.webp"> &nbsp;<span style="font-size: 1.25em;">Ущільнювач - </span></strong></span><span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.25em;">2 контура</span><span style="font-size: 1.25em;">,</span> <span style="font-size: 1.5em;">ТРЕ</span></strong></span></p>
                                                    <p><span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.5em;"><img src="https://framex.ua/wp-content/webp-express/webp-images/uploads/elementor/thumbs/framex-icon-tovshina-zapovnennya-pz47x1f6mp5c0n06it179ihg0z8xwxbkhemjn4ki8o.png.webp"> </span><span style="font-size: 1.5em;"><span style="font-size: 0.9375em;">Товщина заповнення</span></span> </strong></span></p>
                                                    <p><span style="color: #999999; font-size: 1.25em;"><strong><span style="font-size: 1.5em;"><span style="font-size: 0.9375em;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4 мм, 24 мм, 32 мм</span></span></strong></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-down-slider/1.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-down-slider/2.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-down-slider/3.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-down-slider/4.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/home-down-slider/5.jpg.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container mt-3">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Попередня</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Наступна</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <section class="contact_section  long_section">
        @include('callback-form')
    </section>
    <!-- end contact section -->
@endsection

