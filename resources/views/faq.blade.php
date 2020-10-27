@extends('layouts.app')

@section('title')
    KeyMe :: FAQs
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endsection 

@section('main-content')
    <div class="row w-90 mx-auto max-w-0">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row text-center mt-3">
                        <div class="col font-40">چطوری میتونم کمکت کنم؟</div>
                    </div>
                    <div class="row text-center mt-3">
                        <div class="col font-16">
                            جواب سوالتو اگه نتونستی تو این صفحه پیدا کنی، میتونی از طریق <a href="/contactus">فرم تماس با ما</a> سوالتو مطرح کنی
                        </div>
                    </div>
                    <div class="row mt-3">
                        <form class="col" action="">
                            <div class="row justify-content-center">
                                <input class="w-100 search-input" type="text" placeholder="جستجو">
                                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mx-auto mt-5 justify-content-between">
                <div class="col-lg-5 col-8">
                    <div class="row">
                        <div class="col faq-tab active px-0" data-target="#buy">خرید</div>
                        <div class="col faq-tab px-0" data-target="#gift">گیفت کارت</div>
                        <div class="col faq-tab px-0" data-target="#cdkey">CDkey</div>
                        <div class="col faq-tab px-0" data-target="#support">پشتیبانی</div>
                    </div>
                </div>
                <div class="col-lg-3 col-4">
                    <div class="row">
                        <div class="col all-answers text-left" data-target="#signup">همه پاسخ ها</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col faq-part active" id="buy">
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card active">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">1سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
                                </div>
                            </div>
                        </div>
                    </div>
                    @for ($i = 0; $i < 9; $i++)
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
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

                <div class="col faq-part" id="gift">
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card active">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">2سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
                                </div>
                            </div>
                        </div>
                    </div>
                    @for ($i = 0; $i < 9; $i++)
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
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

                <div class="col faq-part" id="cdkey">
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card active">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">3سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
                                </div>
                            </div>
                        </div>
                    </div>
                    @for ($i = 0; $i < 9; $i++)
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
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

                <div class="col faq-part" id="support">
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card active">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">4سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
                                </div>
                            </div>
                        </div>
                    </div>
                    @for ($i = 0; $i < 9; $i++)
                    <div class="row p-3 mt-2 bg-card border-r-all faq-card">
                        <div class="col">
                            <div class="row justify-content-between align-items-center ">
                                <div class="question">سوال اینجا میاد و جوابش هم پایین میاد</div>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="row">
                                <div class="answer">
                                    در حال حاضر تنها این بازی ها در سایت موجود می باشد و در اینده ای نزدیک قصد داریم مجموعه بازی های خود را گسترش داده و انواع بازی های خود را گسترش دهیم
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
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/faq.js') }}"></script>
@endsection 