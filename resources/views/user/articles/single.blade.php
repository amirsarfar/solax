@extends('layouts.app')

@section('title')
    KeyMe :: single
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('css/article-single.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <section>
            <div class="row mt-3">
                <div class="col-md-4 order-2 order-md-1">
                    <div class="input-group ">
                        <input type="text" class="form-control bg-black-75 text-white border-warning" placeholder="بازی مورد نظر تو را جستجو کن" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text bg-warning border-0" id="basic-addon2"><i class="fas fa-search text-dark"></i></span>
                        </div>
                    </div>
                    <div class="bg-black-75 rounded p-4 mt-2 border-warning">
                        <h6>آخرین اخبار</h6>
                        <hr class="bg-warning">
                        @for($i=1; $i<8;$i++)
                            <div class="d-flex justify-content-between my-1">
                                <div class="d-flex justify-content-space-between text-left ">
                                    <div>
                                        <img src="{{asset('images/games/game-'.$i.'.jpg')}}"  alt="" width="150" height="85"
                                             class="rounded">
                                    </div>
                                    <div class="d-flex flex-column text-right p-1 justify-content-space-between py-2">
                                        <span class="text-color-4 font-size-14">‏2Dota برای بازی New Bloom آپدیت </span>
                                        <span class="text-color-4 font-size-14">1399/11/12</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="bg-black-75 rounded p-4 mt-2 border-warning">
                        <div class="d-flex justify-content-space-between">
                            <h6>اخبار مشابه</h6>
                            <span>مشاهده همه</span>
                        </div>
                        <hr class="bg-warning">
                        @for($i=1; $i<8;$i++)
                            <div class="d-flex justify-content-between my-1">
                                <div class="d-flex justify-content-space-between text-left ">
                                    <div>
                                        <img src="{{asset('images/games/game-'.$i.'.jpg')}}"  alt="" width="150" height="85"
                                             class="rounded">
                                    </div>
                                    <div class="d-flex flex-column text-right p-1 justify-content-space-between py-2">
                                        <span class="text-color-4 font-size-14">‏2Dota برای بازی New Bloom آپدیت </span>
                                        <span class="text-color-4 font-size-14">1399/11/12</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="bg-black-75 rounded p-4 mt-2 border-warning">
                        <h6>برچسب ها :</h6>
                        @for($i=1; $i<8;$i++)
                            <span class="border-left px-1 text-black-50">واقعیت مجازی</span>
                        @endfor
                    </div>
                </div>
                <div class="col-md-8 order-1 order-md-2">
                    <div class="bg-black-75 p-3 rounded">
                        <div class="d-flex justify-content-space-between flex-column flex-md-row">
                            <div >
                                <div><h1 class="font-size-20">ایمورتال ترژر 3 immortal treasure</h1></div>
                                <div><span class="border-left px-2">عمومی</span><span class="border-left px-2">احمد عزیزی</span><span class=" px-2">1398/12/12</span></div>
                            </div>
                            <div>
                                <div><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></div>
                                <div class="d-flex justify-content-end">
                                    <i class="far fa-bookmark ml-4"></i>
                                    <i class="far fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/games/game-9.jpg')}}" class="img-fluid mt-2"  alt="">
                        </div>
                        <div class="mt-2">
                            <p>بالاخره پس از تأخیر طولانی ایمورتال ترژر 3 در دسترس قرار گرفت. این Treasure شامل آیتم های جدیدی برای هیرو های Pugna, Clock, Oracle, Treant, Gyrocopter و Lich می باشد. به علاوه این ها هر ترژر شانس کمی دارد تا یک آیتم Rare 50 لول بتل پس، یک Very Rare ایمورتال طلایی پوگنا، و یک Ultra Rare ایمورتال هیروی Phoenix نیز به شما بدهد. همچنین آیتم Ultra Rare A Divine Embelm نیز شانس بسیار  پایینی برای دراپ شدن دارد.
                            </p>
                            <p>
                                همزمان با منتشر شدن این ترژر بتلپس نیز به مدت سه هفته و تا تاریخ 9 اکتبر تمدید شد و در همان تاریخ نتیجه نهایی رای گیری آرکانای امسال که بین دو هیروی اسپکتر و Void بود نیز اعلام خواهد شد. سرنخ : برنده امسال هیروی Carry و بنفش است که قابلیت جابه جایی بالا در زمان کم را داراست که به هر دو هیروی Void و Spectre اشاره می کند که دارای این ویژگی ها هستند.
                            </p>
                            <p>
                                هم چنین به عنوان آخرین تخفیف هر دارنده ی بتل پس می تواند 2 باندل 60 levelup را با 30% تخفیف تهیه کند.
                            </p>
                            <p>بالاخره پس از تأخیر طولانی ایمورتال ترژر 3 در دسترس قرار گرفت. این Treasure شامل آیتم های جدیدی برای هیرو های Pugna, Clock, Oracle, Treant, Gyrocopter و Lich می باشد. به علاوه این ها هر ترژر شانس کمی دارد تا یک آیتم Rare 50 لول بتل پس، یک Very Rare ایمورتال طلایی پوگنا، و یک Ultra Rare ایمورتال هیروی Phoenix نیز به شما بدهد. همچنین آیتم Ultra Rare A Divine Embelm نیز شانس بسیار  پایینی برای دراپ شدن دارد.
                            </p>
                            <p>بالاخره پس از تأخیر طولانی ایمورتال ترژر 3 در دسترس قرار گرفت. این Treasure شامل آیتم های جدیدی برای هیرو های Pugna, Clock, Oracle, Treant, Gyrocopter و Lich می باشد. به علاوه این ها هر ترژر شانس کمی دارد تا یک آیتم Rare 50 لول بتل پس، یک Very Rare ایمورتال طلایی پوگنا، و یک Ultra Rare ایمورتال هیروی Phoenix نیز به شما بدهد. همچنین آیتم Ultra Rare A Divine Embelm نیز شانس بسیار  پایینی برای دراپ شدن دارد.
                            </p>
                            <hr class="bg-secondary">
                            <div class="d-flex justify-content-end ">
                                <div>
                                    <span>منبع:ویکیپدیا</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black-75 p-3 mt-2 rounded">
                        <div>
                            <div class="d-flex justify-content-space-between">
                                <div><span>نظرات کاربران</span></div>
                                <div class="text-success"> + ثبت نظر جدید</div>
                            </div>
                            <hr class="bg-secondary">
                            <div class="p-2">
                                <div class="rounded border-black-50 my-2 p-2">
                                    <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                        <div class="d-flex justify-content-space-between">
                                            <img src="{{asset('images/users/user-2.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                            <div class="mr-2">
                                                <span class="font-size-14"> مریم زنجانی </span>
                                                <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <span class="font-size-14  border-radius-20 p-1 ml-1">پاسخ</span>
                                            <span class="font-size-14">1398/06/11</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border-black-50 my-2 p-2">
                                    <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                        <div class="d-flex justify-content-space-between">
                                            <img src="{{asset('images/users/user-3.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                            <div class="mr-2">
                                                <span class="font-size-14"> مریم زنجانی</span>
                                                <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <span class="font-size-14 border-radius-20 p-1 ml-1">پاسخ</span>
                                            <span class="font-size-14">1398/06/11</span>
                                        </div>
                                    </div>
                                    <div class="bg-black-85 rounded my-2 mx-4 p-2">
                                        <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                            <div class="d-flex justify-content-space-between">
                                                <img src="{{asset('images/users/user-4.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                                <div class="mr-2">
                                                    <span class="font-size-14"> مریم زنجانی </span>
                                                    <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-baseline">
                                                <span class="font-size-14">1398/06/11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border-black-50 my-2 p-2">
                                    <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                        <div class="d-flex justify-content-space-between">
                                            <img src="{{asset('images/users/user-2.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                            <div class="mr-2">
                                                <span class="font-size-14"> مریم زنجانی </span>
                                                <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <span class="font-size-14  border-radius-20 p-1 ml-1">پاسخ</span>
                                            <span class="font-size-14">1398/06/11</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border-black-50 my-2 p-2">
                                    <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                        <div class="d-flex justify-content-space-between">
                                            <img src="{{asset('images/users/user-3.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                            <div class="mr-2">
                                                <span class="font-size-14"> مریم زنجانی</span>
                                                <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <span class="font-size-14 border-radius-20 p-1 ml-1">پاسخ</span>
                                            <span class="font-size-14">1398/06/11</span>
                                        </div>
                                    </div>
                                    <div class="bg-black-85 rounded my-2 mx-4 p-2">
                                        <div class="d-flex flex-column flex-lg-row justify-content-space-between">
                                            <div class="d-flex justify-content-space-between">
                                                <img src="{{asset('images/users/user-4.png')}}" class="rounded-circle border-3" alt="" width="50" height="50">
                                                <div class="mr-2">
                                                    <span class="font-size-14"> مریم زنجانی </span>
                                                    <p class="font-size-16">سلام واقعا عالی بود، دستتون درد نکنه</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-baseline">
                                                <span class="font-size-14">1398/06/11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <div class="bg-black-75 p-3 mt-2 mb-3 rounded">
                        <div>
                            <h6 class="font-size-20">ثبت نظر</h6>
                            <form action="" >
                                <div class="row">
                                    <div class="col-md-4 m-0 p-0">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-black-85 border-0 mb-md-4" placeholder="ایمیل *">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-black-85 border-0" placeholder="نام و نام خانوادگی *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control bg-black-85 border-0" rows="4" placeholder="متن پیام خود را وارد کنید"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success border-radius-20"> ارسال نظر</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
