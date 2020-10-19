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
                            پرداخت
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-shopping-cart fa-3x"></i>
                        <div class="title">
                            افزودن به سبد خرید
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fa fa-money fa-3x"></i>
                        <div class="title">
                            ثبت سفارش
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="sell-offers row mt-5">
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="row">
                    <div class="online col-4">
                        <div class="count mt-auto">
                            بازیکنان آنلاین: ۲۰۰۰
                        </div>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar" style="width:40%;height:5px"></div>
                        </div>
                    </div>
                    <div class="description col-4">
                        <a href="">
                            <div class="title">
                                <div class="text">Dota 2</div>
                                <img src="images/gicon{{rand(1,9)}}.jpg" alt="gicon">
                            </div>
                        </a>
                        <div class="meta-critic">
                            <div>4.5</div>
                            <img src="images/metaicon.png" alt="metacritic">
                        </div>
                    </div>
                    <div class="image col-4">
                        <a href="">
                            <img class="header" src="images/header{{rand(1,9)}}.jpg" alt="">
                        </a>
                    </div>
                </div>
                @endfor
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="row">
                    <div class="online col-4">
                        <div class="count mt-auto">
                            بازیکنان آنلاین: ۲۰۰۰
                        </div>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar" style="width:40%;height:5px"></div>
                        </div>
                    </div>
                    <div class="description col-4">
                        <a href="">
                            <div class="title">
                                <div class="text">Dota 2</div>
                                <img src="images/gicon{{rand(1,9)}}.jpg" alt="gicon">
                            </div>
                        </a>
                        <div class="meta-critic">
                            <div>4.5</div>
                            <img src="images/metaicon.png" alt="metacritic">
                        </div>
                    </div>
                    <div class="image col-4">
                        <a href="">
                            <img class="header" src="images/header{{rand(1,9)}}.jpg" alt="">
                        </a>
                    </div>
                </div>
                @endfor
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="row">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="row">
                    <div class="online col-4">
                        <div class="count mt-auto">
                            بازیکنان آنلاین: ۲۰۰۰
                        </div>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar" style="width:40%;height:5px"></div>
                        </div>
                    </div>
                    <div class="description col-4">
                        <a href="">
                            <div class="title">
                                <div class="text">Dota 2</div>
                                <img src="images/gicon{{rand(1,9)}}.jpg" alt="gicon">
                            </div>
                        </a>
                        <div class="meta-critic">
                            <div>4.5</div>
                            <img src="images/metaicon.png" alt="metacritic">
                        </div>
                    </div>
                    <div class="image col-4">
                        <a href="">
                            <img class="header" src="images/header{{rand(1,9)}}.jpg" alt="">
                        </a>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<div class="row no-gutters">
    <div class="banner">
        <img class="back-layer" src="images/madmaxback.jpg" alt="madmax">
        <img class="top-layer" src="images/madmax.png" alt="madmax">
        <div class="description">
            <div class="title">
                Mad Max
            </div>
            <div class="text">
                این فیلم چهارمین قسمت از سری فیلم‌های مکس دیوانه و ریبوت آن به‌شمار می‌آید. قرار است دنباله این فیلم ساخته شود.کارگردان فیلم مکس دیوانه جاده خشم این طور میگوی
            </div>
            <div class="meta-critic mt-auto bg-green">
                <div>4.5</div>
                <img src="images/metaicon.png" alt="meta">
            </div>
        </div>
    </div>
</div>

<div class="no-gutters row category-overview">
    <div class="col-12">
        <div class="row">

        </div>
        <div class="row no-gutters">
            <div class="col-10 category-item active" id="category1">
                @for ($j = 0; $j < 3; $j++)
                    <div class="row my-2">
                        @for ($k = 0; $k < 5; $k++)
                        <div class="col col-lg game-card">
                            <div class="row">
                                <img class="header" src="images/header{{rand(1,9)}}.jpg" alt="header">
                            </div>
                            <div class="row">
                                <div class="title">
                                    <div class="text">Dota 2</div>
                                    <img src="images/gicon{{rand(1,9)}}.jpg" alt="gicon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="online pb-2">
                                    <div class="count mt-auto">
                                        بازیکنان آنلاین: ۲۰۰۰
                                    </div>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar" style="width:40%;height:5px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="date">
                                    2020/10/03
                                </div>
                                <div class="meta-critic">
                                    <div>4.5</div>
                                    <img src="images/metaicon.png" alt="metacritic">
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                @endfor
            </div>

            @for ($i = 2; $i < 7; $i++)
                <div class="col-10 category-item" id="category{{ $i }}">
                    @for ($j = 0; $j < 3; $j++)
                        <div class="row my-2">
                            @for ($k = 0; $k < 5; $k++)
                            <div class="col game-card">
                                <div class="row">
                                    <img class="header" src="images/header{{rand(1,9)}}.jpg" alt="header">
                                </div>
                                <div class="row">
                                    <div class="title">
                                        <div class="text">Dota 2</div>
                                        <img src="images/gicon{{rand(1,9)}}.jpg" alt="gicon">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="online pb-2">
                                        <div class="count mt-auto">
                                            بازیکنان آنلاین: ۲۰۰۰
                                        </div>
                                        <div class="progress" style="height:5px">
                                            <div class="progress-bar" style="width:40%;height:5px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="date">
                                        2020/10/03
                                    </div>
                                    <div class="meta-critic">
                                        <div>4.5</div>
                                        <img src="images/metaicon.png" alt="metacritic">
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    @endfor
                </div>
            @endfor
                
            <div class="col-2">
                <div class="row category-selector active" data-target="#category1">
                    <img src="images/upimg1.jpg" alt="upimg">
                    <div class="category-text row">
                        <div class="col-8 title">
                            <div class="row">RPG</div>
                            <div class="row">(159)</div>
                        </div>
                        <div class="col-4 number">
                            <div class="row">1</div>
                        </div>
                    </div>
                </div>
                @for ($i = 2; $i < 7; $i++)
                <div class="row category-selector" data-target="#category{{$i}}">
                    <img src="images/upimg{{$i}}.jpg" alt="upimg">
                    <div class="category-text row">
                        <div class="col-8 title">
                            <div class="row">RPG</div>
                            <div class="row">(159)</div>
                        </div>
                        <div class="col-4 number">
                            <div class="row">{{$i}}</div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</div>

<div class="row no-gutters">
    <div class="banner">
        <img class="back-layer" src="images/creedback.jpg" alt="creed">
        <img class="top-layer" src="images/creed.png" alt="creed">
        <div class="description">
            <div class="title">
                Assassin's Creed
            </div>
            <div class="text">
                این فیلم چهارمین قسمت از سری فیلم‌های مکس دیوانه و ریبوت آن به‌شمار می‌آید. قرار است دنباله این فیلم ساخته شود.کارگردان فیلم مکس دیوانه جاده خشم این طور میگوی
            </div>
            <div class="meta-critic mt-auto bg-green">
                <div>4.5</div>
                <img src="images/metaicon.png" alt="meta">
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection