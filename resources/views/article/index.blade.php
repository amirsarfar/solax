@extends('layouts.app')

@section('title')
    KeyMe :: Articles
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
@endsection 

@section('main-content')
    <div class="row w-90 mx-auto mt-5 no-gutters max-w-1">
        <div class="col-xl-3 col-md-4 order-2 order-md-1">
            <div class="row border-r-all border-yellow bg-card px-3 py-2 no-gutters ml-2">
                <div class="col px-2">
                    <div class="row">جستجو شده:</div>
                    <div class="row mt-3">
                        @for($i=1; $i<8;$i++)
                            <span class="align-items-center d-inline-flex mt-2 rounded p-1 bg-5 mx-1"> 
                                <i class="fas fa-times pl-1"></i>واقعیت مجازی</span>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="row border-r-all border-yellow bg-card mt-3 px-3 py-2 no-gutters ml-2">
                <div class="col px-2">
                    <div class="row">جستجو شده:</div>
                    <div class="row mt-3">
                        <div class="col">
                            @for ($i = 0; $i < 7; $i++)
                            <div class="row mt-2">
                                <div class="col-4 p-0">
                                    <img class="w-100 border-r-all h-75p object-cover" src="{{ asset('images/header'. rand(1,9) .'.jpg') }}" alt="header">
                                </div>
                                <div class="col-8 custom-column justify-content-between">
                                    <div class="row no-gutters font-16 overflow-hidden max-height-50">آرکانای جدید pudge منتشر شد</div>
                                    <div class="row no-gutters font-12">1399/12/11</div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-8 order-1 order-md-2">
            <div class="row bg-card mx-1 h-48p border-r-all">
                <form class="col" action="">
                    <div class="row justify-content-center">
                        <input class="w-100 search-input border-r-all border-yellow mt-8p mx-2 pl-5 pr-2" type="text" placeholder="جستجو">
                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
            @for ($i = 0; $i < 15; $i++)
            <div class="row mx-1 mt-2 no-gutters">
                <div class="col-xl-6 mb-xl-0 mb-2">
                    <div class="row no-gutters bg-card border-r-all mx-1">
                        <div class="col-6 pr-2">
                            <div class="row no-gutters max-height-50 overflow-hidden">دوتا : تمام هیرو هایی که آرکانا دارند. (قسمت دوم)</div>
                            <div class="row no-gutters">1396/11/12</div>
                        </div>
                        <div class="col-2 custom-column justify-content-end">
                            <div class="meta-critic">
                                <div>4.5</div>
                                <img src="{{ asset('images/metaicon.png') }}" alt="metacritic">
                            </div>
                        </div>
                        <div class="col-4">
                            <img class="h-75p w-100 object-cover" src="{{ asset('images/header'. rand(1,9) .'.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row no-gutters bg-card border-r-all mx-1">
                        <div class="col-6 pr-2">
                            <div class="row no-gutters max-height-50 overflow-hidden">دوتا : تمام هیرو هایی که آرکانا دارند. (قسمت دوم)</div>
                            <div class="row no-gutters">1396/11/12</div>
                        </div>
                        <div class="col-2 custom-column justify-content-end">
                            <div class="meta-critic">
                                <div>4.5</div>
                                <img src="{{ asset('images/metaicon.png') }}" alt="metacritic">
                            </div>
                        </div>
                        <div class="col-4">
                            <img class="h-75p w-100 object-cover" src="{{ asset('images/header'. rand(1,9) .'.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            
            <div class="row">
                <div class="col">
                    <ul class="pagination justify-content-center" style="margin:20px 0">
                        <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/articles.js') }}"></script>
@endsection 