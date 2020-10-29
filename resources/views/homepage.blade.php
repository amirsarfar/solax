@extends('layouts.app')

@section('title')
    KeyMe :: Homepage
@endsection

@section('head') 
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('main-content')

<div class="row carousel-title mt-3 mx-auto">
    <div>پیشنهاد ویژه</div>
</div>
<div class="row no-gutters w-100">
    <!--<img src="images/brushi.png" alt="" class="back-image">-->
    <div class="carousel d-flex flex-row align-items-center mx-auto my-4">
        <div class="right"><i class="fa fa-angle-right fa-3x"></i></div>
            <div class="outer-stage mx-3">
                <div class="stage d-flex">
                    <div class="slide active">
                       <div class="row h-100 no-gutters">
                            <div class="col-4 h-100">
                                <div class="row h-50 no-gutters">
                                    <img class="h-100 w-100 object-cover" src="images/header2.jpg" alt="header2">
                                </div>
                                <div class="row h-50 no-gutters">
                                    <img class="h-100 w-100 object-cover" src="images/header3.jpg" alt="header2">
                                </div>
                            </div>
                            <div class="col-8 h-100">
                                <div class="row h-100 no-gutters">
                                    <img class="h-100 w-100 object-cover" src="images/header4.jpg" alt="header2">
                                </div>
                            </div>
                       </div>
                    </div>
                    @for ($i = 0; $i < 4; $i++)
                    <div class="slide">
                        <div class="row h-100 no-gutters">
                             <div class="col-4">
                                 <div class="row h-50 no-gutters">
                                     <img class="h-100 w-100 object-cover" src="images/header{{rand(1,9)}}.jpg" alt="header2">
                                 </div>
                                 <div class="row h-50 no-gutters">
                                     <img class="h-100 w-100 object-cover" src="images/header{{rand(1,9)}}.jpg" alt="header2">
                                 </div>
                             </div>
                             <div class="col-8">
                                 <div class="row h-100 no-gutters">
                                     <img class="h-100 w-100 object-cover" src="images/header{{rand(1,9)}}.jpg" alt="header2">
                                 </div>
                             </div>
                        </div>
                    </div>
                    @endfor
                  
                </div>
            </div>
        <div class="left"><i class="fa fa-angle-left fa-3x"></i></div>
    </div>
</div>

<div class="row no-gutters">
    <div class="store-intro max-w-2 mx-auto">
        <img src="images/ember.png" alt="ember" class="back-image">
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
                        <i class="fal fa-gift fa-3x"></i>
                        <div class="title">
                            تحویل محصول
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img src="images/rarrow.png" alt="arrow">
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fal fa-credit-card fa-3x"></i>
                        <div class="title">
                            پرداخت
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img src="images/rarrow.png" alt="arrow">
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fal fa-shopping-cart fa-3x"></i>
                        <div class="title">
                            افزودن به سبد خرید
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img src="images/rarrow.png" alt="arrow">
            </div>
            <div class="wrapper">
                <div class="process">
                    <div class="content">
                        <i class="fal fa-money-bill-alt fa-3x"></i>
                        <div class="title">
                            ثبت سفارش
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="sell-offers row mt-5 max-w-1">
            <div class="col-xl-4 col-lg-6">
                <div class="row justify-content-between mb-2">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="game-card-2">
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
            <div class="col-xl-4 col-lg-6">
                <div class="row justify-content-between mb-2">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="game-card-2">
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
            <div class="col-xl-4 col-lg-12">
                <div class="row justify-content-between mb-2">
                    <div class="title">محبوب ترین ها</div>
                    <div class="more"><a href="">نمایش همه</a></div>
                </div>
                @for ($i = 0; $i < 10; $i++)
                <div class="game-card-2">
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
    <div class="banner max-w-2">
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

<div class="no-gutters row category-overview max-w-1">
    <div class="col-12">
        <div class="row no-gutters">
            <div class="col-10">
                <div class="row justify-content-between">
                    <div>تازه ترین ها</div>
                    <div><a href="">مشاهده همه</a></div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-10 order-3 order-lg-2 category-item active " id="category1">
                <div class="row no-gutters my-2">
                    @for ($k = 0; $k < 15; $k++)
                    <div class="col-4  col-md-3 col-lg-2  ">
                        <div class="game-card">
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
                    </div>
                    @endfor
                </div>
            </div>
            @for ($i = 2; $i < 7; $i++)
            <div class="col-lg-10 order-3 order-lg-2 category-item" id="category{{$i}}">
                <div class="row no-gutters my-2">
                    @for ($k = 0; $k < 15; $k++)
                    <div class="col-4  col-md-3 col-lg-2  ">
                        <div class="game-card">
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
                    </div>
                    @endfor
                </div>
            </div>
            @endfor
            {{-- <div class="col-lg-2 ">
                <div class="px-3">
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
                </div> --}}
            <div class="col-lg-2 order-2 order-lg-3 d-flex d-lg-block">
                <div class=" w-100 d-flex category-selector position-relative" data-target="#category1" style="height: 110px !important;background-color: rgba(11,11,11,.5);">
                    <div class="d-flex justify-content-end  position-relative w-100" >
                    <img class="position-absolute z-index--3 object-cover" src="{{asset('images/header'.$i.'.jpg')}}" alt="" width="100%" height="110px">
                        <div class="d-flex align-self-end ">
                            <div class="d-flex flex-column text-left">
                                <div class="font-size-18">
                                        نام دسته بندی
                                </div>
                                <div class="font-size-16 d-none d-lg-block ">
                                        (655)
                                </div>
                            </div>
                            <div>
                            <h2 class="h1 d-none d-lg-block">1</h2>
                        </div>
                        </div>
                    </div>
                </div>
                @for ($i = 2; $i < 7; $i++)
                <div class=" w-100 d-flex category-selector position-relative" data-target="#category{{$i}}" style="height: 110px !important;background-color: rgba(11,11,11,.5);">
                    <div class="d-flex justify-content-end  position-relative w-100" >
                    <img class="position-absolute z-index--3 object-cover" src="{{asset('images/header'.$i.'.jpg')}}" alt="" width="100%" height="110px">
                        <div class="d-flex align-self-end ">
                            <div class="d-flex flex-column text-left">
                                <div class="font-size-18">
                                        نام دسته بندی
                                </div>
                                <div class="font-size-16 d-none d-lg-block ">
                                        (655)
                                </div>
                            </div>
                            <div>
                            <h2 class="h1 d-none d-lg-block">{{$i}}</h2>
                        </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

        </div>
    </div>
</div>

<div class="row no-gutters">
    <div class="banner max-w-2">
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


<div class="row no-gutters column-offer max-w-1">
    <div class="col-12">
        <div class="row">

        </div>
        <img src="images/mortal.png" alt="mortal" class="back-image">
        <div class="row no-gutters column-offer-inner">
            <div class="col-md-3 height-1">
                <div class="row mt-3">
                    بالاترین ها
                </div>
                <div class="row mt-2">
                    <img src="images/upimg2.jpg" alt="upimg" style="height: 100%;width:100%;object-fit:cover;">
                </div>
            </div>
            <div class="col-md-6 height-1">
                <div class="row mt-3">
                    بالاترین ها
                </div>
                @for ($i = 0; $i < 2; $i++)
                <div class="row my-2 h-50">
                    @for ($j = 0; $j < 3; $j++)
                    <div class="game-card">
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
            <div class="col-md-3 height-1">
                <div class="row mt-3">
                    بالاترین ها
                </div>
                <div class="row game-card-hoverable active mt-2">
                    <div class="col">
                        <div class="row show">
                            <div class="col">
                                <div class="meta-critic mt-auto bg-green">
                                    <div>4.5</div>
                                    <img src="images/metaicon.png" alt="meta">
                                </div>
                            </div>
                            <div class="col">
                                <div class="title">
                                    <div class="text">Dota 2</div>
                                    <img src="images/gicon{{rand(1,5)}}.jpg" alt="gicon">
                                </div>
                            </div>
                        </div>
                        <div class="row hover-show">
                            <div class="col">
                                Category
                            </div>
                            <div class="col icons">
                                <div class="row">
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="row">
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                            <div class="col">
                                <img src="images/header1.jpg" alt="header" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                @for ($i = 0; $i < 7; $i++)
                <div class="row game-card-hoverable mt-2">
                    <div class="col">
                        <div class="row show">
                            <div class="col">
                                <div class="meta-critic mt-auto bg-green">
                                    <div>4.5</div>
                                    <img src="images/metaicon.png" alt="meta">
                                </div>
                            </div>
                            <div class="col">
                                <div class="title">
                                    <div class="text">Dota 2</div>
                                    <img src="images/gicon{{rand(1,5)}}.jpg" alt="gicon">
                                </div>
                            </div>
                        </div>
                        <div class="row hover-show">
                            <div class="col">
                                Category
                            </div>
                            <div class="col icons">
                                <div class="row">
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="row">
                                    <i class="fa fa-home"></i>
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                            <div class="col">
                                <img src="images/header1.jpg" alt="header" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<div class="row no-gutters coming-soon max-w-1">
    <div class="col-12">
        <div class="row justify-content-between">
            <div>بازی های در حال انتشار</div>
            <div><a href="">مشاهده همه</a></div>
        </div>
        <div class="row games">
            @for ($i = 1; $i < 7; $i++)
            <div class="col-md-2 col-6 game">
                <img src="images/upimg{{$i}}.jpg" alt="upimg">
                <div class="info">
                    <div class="title">Dota 2</div>
                    <div class="category">Strategy</div>
                    <div class="icons">
                        <i class="fa fa-gift"></i>
                        <i class="fa fa-gift"></i>
                        <i class="fa fa-gift"></i>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="row w-90 mx-auto max-w-2">
    <div class="col-md-8 mt-3">
        <div class="row no-gutters bg-card border-r-all">
            <canvas id="myChart" width="630" height="350"></canvas>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="row no-gutters bg-card border-r-all">
            <canvas id="myChart2" width="630" height="350"></canvas>
        </div>
    </div>
</div>

<div class="row no-gutters vr-section max-w-1">
    <div class="col-12">
        <div class="row">

        </div>
        <div class="row vr-games">
            @for ($i = 1; $i < 7; $i++)
            <div class="col-md-4 col-sm-6 col-12 vr-game">
                <img src="images/header{{$i}}.jpg" alt="upimg">
                <div class="info">
                    <div class="row mx-2">
                        <div class="col">
                            <div class="row justify-content-end font-16">Dota 2 Bala</div>
                            <div class="row justify-content-end">1999/12/07</div>
                        </div>
                        <div class="col-2">
                            <img class="h-40p w-40p" src="{{ asset('images/gicon'. rand(1,9) .'.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="row align-items-center mx-2 mb-3">
                        <div class="col">
                            بازیکنان آنلاین: 2000
                        </div>
                        <div class="col">
                            <div class="progress" style="height:5px">
                                <div class="progress-bar" style="width:40%;height:5px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

@endsection

@section('script')   
    <script src="{{ asset('js/Chart.min.js') }}"></script> 
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection