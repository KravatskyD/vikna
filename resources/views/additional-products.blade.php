@extends('layouts.main')
@section('sub-header')
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/1.jpg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/2.jpeg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/3.jpg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/4.jpg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/5.jpeg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/6.jpg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/additional-products/7.jpeg.webp" alt="">
                        </div>
                        <div class="carousel-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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

