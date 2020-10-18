@extends('layouts.app')

@section('title')
    KeyMe :: Homepage
@endsection

@section('head') 
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">    
@endsection

@section('main-content')
    
<div class="row no-gutters carousel-wrapper">
    <div class="carousel d-flex flex-row align-items-center mx-auto">
        <div class="right"><i class="fa fa-angle-right fa-3x"></i></div>
            <div class="outer-stage mx-3">
                <div class="stage d-flex">
                    <div class="slide active">
                       <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <img src="images/header2.jpg" alt="header2">
                                </div>
                                <div class="row">
                                    <img src="images/header3.jpg" alt="header2">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <img src="images/header4.jpg" alt="header2">
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="slide">
                       
                    </div>
                    <div class="slide">
                       
                    </div>
                    <div class="slide">
                        
                    </div>
                    <div class="slide">
                        
                    </div>
                </div>
            </div>
        <div class="left"><i class="fa fa-angle-left fa-3x"></i></div>
    </div>
</div>

<div class="row no-gutters">
    <div class="store-intro">
        <img src="images/ember.png" alt="ember" class="back">
        <div class="supported-platforms">
            <div class="platform">
                <img src="images/en_flag.png" alt="">
                <div>UPLAY</div>
            </div>
            <div class="platform">
                <img src="images/es_flag.png" alt="">
                <div>UPLAY</div>
            </div>
            <div class="platform">
                <img src="images/fr_flag.png" alt="">
                <div>UPLAY</div>
            </div>
            <div class="platform">
                <img src="images/fa_flag.png" alt="">
                <div>UPLAY</div>
            </div>
            <div class="platform">
                <img src="images/en_flag.png" alt="">
                <div>UPLAY</div>
            </div>
            <div class="platform">
                <img src="images/es_flag.png" alt="">
                <div>UPLAY</div>
            </div>
        </div>

        <div class="store-process">
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-gift fa-3x"></i>
                        <div class="title">
                            تحویل محصول
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-credit-card fa-3x"></i>
                        <div class="title">
                            تحویل محصول
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-shopping-cart fa-3x"></i>
                        <div class="title">
                            تحویل محصول
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-money fa-3x"></i>
                        <div class="title">
                            تحویل محصول
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="sell-offers row">
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                <div class="row">
                    <div class="online col-4">
                        <div class="count">
                            بازیکنان آنلاین:۲۰۰۰ نفر
                        </div>
                        <div class="progress" style="height:10px">
                            <div class="progress-bar" style="width:40%;height:10px"></div>
                        </div>
                    </div>
                    <div class="name col-4"></div>
                    <div class="image col-4">
                        <img src="images/header2.jpg" alt="">
                    </div>
                </div>
                <div class="row">f</div>
                <div class="row">g</div>
                <div class="row">s</div>
                <div class="row">d</div>
                <div class="row">s</div>
                <div class="row">s</div>
                <div class="row">a</div>
                <div class="row">d</div>
                <div class="row">w</div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                <div class="row">d</div>
                <div class="row">f</div>
                <div class="row">g</div>
                <div class="row">s</div>
                <div class="row">d</div>
                <div class="row">s</div>
                <div class="row">s</div>
                <div class="row">a</div>
                <div class="row">d</div>
                <div class="row">w</div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                <div class="row">d</div>
                <div class="row">f</div>
                <div class="row">g</div>
                <div class="row">s</div>
                <div class="row">d</div>
                <div class="row">s</div>
                <div class="row">s</div>
                <div class="row">a</div>
                <div class="row">d</div>
                <div class="row">w</div>
            </div>
        </div>
    </div>
</div>

@endsection
