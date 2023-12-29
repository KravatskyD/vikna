@extends('layouts.main')
@section('sub-header')
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-box">
                                    <img src="assets/images/our-projects/1.jpg.webp" alt="Фасад будівлі">
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
                                    <img src="assets/images/our-projects/2.jpg.webp" alt="Приватний будинок">
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
                                    <img src="assets/images/our-projects/3.jpg.webp" alt="Їдальня">
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
                                    <img src="assets/images/our-projects/4.jpg.webp" alt="Бізнес площа">
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
                                    <img src="assets/images/our-projects/5.jpg.webp" alt="Інший приватний будинок">
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
                                    <img src="assets/images/our-projects/6.jpg.webp" alt="Приватний будинок">
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
                                    <img src="assets/images/our-projects/7.jpg.webp" alt="Вхідні двері">
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
                                    <img src="assets/images/our-projects/8.jpg.webp" alt="Двері">
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
                                    <img src="assets/images/our-projects/9.jpg.webp" alt="Лоджія">
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
                <li data-target="#customCarousel" data-slide-to="5"></li>
                <li data-target="#customCarousel" data-slide-to="6"></li>
            </ol>
        </div>
    </section>
@endsection
@section('content')
    <!-- contact section -->
    <section class="contact_section  long_section">
        @include('callback-form')
    </section>
    <!-- end contact section -->
@endsection

