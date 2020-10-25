@extends('layouts.app')

@section('title')
    KeyMe :: Articles
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
@endsection 

@section('main-content')
    <div class="row w-90 mx-auto mt-5">
        <div class="col-4">
            <div class="row border-r-all border-yellow bg-card px-3 py-2">
                <div class="col">
                    <div class="row">جستجو شده:</div>
                    <div class="row mt-3"> بالا شده تگ ها میاد</div>
                </div>
            </div>
            <div class="row border-r-all border-yellow bg-card mt-3 px-3 py-2">
                <div class="col">
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
        <div class="col-8">
            <div class="row bg-card">
                <form class="col" action="">
                    <div class="row justify-content-center">
                        <input class="w-100 search-input border-r-all border-yellow" type="text" placeholder="جستجو">
                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/articles.js') }}"></script>
@endsection 