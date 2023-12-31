@extends('layouts.main')
@section('sub-header')
    <!-- slider section -->
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel carousel--certificates slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/certs/FRAMEX.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/certs/ROTO.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/certs/SIGENIA.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="img-box">
                            <img src="assets/images/certs/VORNE.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel" data-slide-to="1"></li>
                <li data-target="#customCarousel" data-slide-to="2"></li>
                <li data-target="#customCarousel" data-slide-to="3"></li>
            </ol>
        </div>
    </section>
    <!-- end slider section -->
@endsection
