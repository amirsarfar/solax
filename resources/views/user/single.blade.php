@extends('layouts.app')

@section('title')
KeyMe :: single
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('css/single.css')}}">
@endsection
@section('main-content')
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
           border-radius: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            border-radius: 5px;
            background: #6B6666;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: #B8B6B4;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            border-radius: 5px;
            background: #B8B6B4;
        }
    </style>
    <div class="container-fluid" style="background-image: url({{asset('images/bg-single.png')}});height: 300px;background-size: cover; background-repeat: no-repeat ;">
        <div class="container-1 mt-5">
            <div class="row ">
                <div class="col-md-4 " >
                    <div class="ml-1 border-div item-1 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between  m-2 ">
                                <p>متای بازی</p>
                                <div class="bg-success d-flex align-items-center align-content-center justify-content-between" style="width: 80px;border-radius: 29px !important;height: 31px !important;">
                                    <span class="text-dark mr-3">4.5</span>
                                    <img class="mr-1 " src="{{asset('images/icon/icon-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between  m-2">
                                <p>افزودن به علاقه مندی ها</p>
                                <div class=" d-flex align-items-center align-content-center justify-content-between" style="width: 80px;border-radius: 29px !important;height: 31px !important;">
                                    <span class="text-white mr-3">25</span>
                                    <i class="text-warning far fa-bookmark ml-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-custom-top py-3 mx-3 overflow-hidden">
                            <span class="span-custom-1 text-black-50 p-1 m-1 d-inline-block">
                                      <i class="fas fa-database"></i>  مرکز اطلاعات
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-1 d-inline-block">
                                      <i class="fas fa-shopping-cart"></i>فروشگاه استیم
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-1 d-inline-block">
                                      <i class="fas fa-home"></i>وبسایت بازی
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-1 d-inline-block">
                                      <i class="fab fa-twitch"></i> twitch
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-2 d-inline-block">
                                      <i class="fas fa-database"></i> patches
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-2 d-inline-block">
                                      <i class="fas fa-database"></i> PCGW
                            </span>
                            <span class="span-custom-1 text-black-50 p-1 m-2 d-inline-block">
                                      <i class="fas fa-database"></i> تیوتر
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="item-1 ml-1 bg-dark">
                        <div class="ml-1 border-div item-1 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>دسته بندی :</span>
                                    <div>
                                        <span class="font-size-14 color-1">واقعیت مجازی</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>ژانر :</span>
                                    <div>
                                        <span class="font-size-14 color-1">ماجراجویی</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>توسعه دهنده:</span>
                                    <div>
                                        <span class="font-size-14 color-1">ILLUSION</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>ناشر :</span>
                                    <div>
                                        <span class="font-size-14 color-1">ILLUSION</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>تاریخ انتشار :</span>
                                    <div>
                                        <span class="font-size-14 color-1">11/12/1399</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-2 mb-1">
                                    <span>مشاهده تاریخچه بروز رسانی</span>
                                </div>
                            </div>
                            <div class="d-flex  flex-md-row  justify-content-between m-1">
                                <div class="rounded  py-3 mx-1 px-2 btn-center-1 d-flex w-100  align-items-center">
                                    <div>
                                        <span class="" ><b>رضایت مندی</b></span>
                                    </div>
                                    <div class="text-left">
                                        <div>
                                            <span class="text-warning font-size-20">55%</span>
                                            <img src="{{asset('images/icon/icon-3.png')}}" width="30" height="30" alt="">
                                        </div>
                                        <div>
                                            <span class="text-white">253</span>
                                            <i class="far fa-thumbs-down text-white"></i>
                                            <span class="text-success">252</span>
                                            <i class="fa fa-thumbs-up text-success"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded  py-3 mx-1 btn-center-2 d-flex w-100  align-items-center">
                                    <div>
                                        <span class="mx-2"><b>بازیکنان آنلاین</b></span>
                                    </div>
                                    <div>
                                        <span class="font-size-20 text-warning-custom mx-2"><b>369</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="item-1 ml-1 bg-dark d-flex flex-column justify-content-between">
                        <div>
                        <img src="{{asset('images/games/game-2.jpg')}}" class="img-fluid" alt="" style="height: 230px !important;">
                        </div>
                        <div class="d-flex justify-content-space-between ">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="d-flex mb-1">
                                    <img src="{{asset('images/users/user-1.png')}}" class="img-custom">
                                    <div class="position-absolute mx-3">
                                        <img src="{{asset('images/users/user-2.png')}}" class="img-custom ">
                                    </div>
                                    <div class="position-absolute mr-4 ">
                                        <img src="{{asset('images/users/user-3.png')}}" class="img-custom mr-2">
                                    </div>
                                    <div class="position-absolute mr-5 ">
                                        <img src="{{asset('images/users/user-4.png')}}" class="img-custom position-absolute ">
                                    </div>
                                    <div class="position-absolute mr-5 text-center ">
                                        <span class="img-custom bg-secondary position-absolute mr-3 align-items-center pt-1">4+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-space-between">
                                <div class="m-1 d-flex justify-content-space-between align-items-center">
                                    <span class="font-size-20 pl-2">Spelunky 2</span>
                                    <img src="{{asset('images/icon/icon-2.png')}}" alt="">
                                </div>
                                <div class="m-1 d-flex justify-content-around">
                                    <div class="mr-4 text-black-50">
                                        <i class="far fa-bookmark "></i>
                                    </div>
                                    <div class="text-black-50" >
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success alert-success-custom border-0 mt-2 alert-dismissible fade show" role="alert">
                <strong class="text-warning-custom font-size-20">توجه :</strong><Br>
                <span class="text-white mt-1">Windows یا Oculus Rift ،: HTC Vive به یکی از هدست های واقعیت مجازی زیر احتیاج دارد .مراجعه کنید VR برای اطلاعات بیشتر به بخش پشتیبانی. Mixed Reality.
            </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6 overflow-hidden" style="height: 400px;">
                        <ul class="nav border-radius-t  bg-black-50 pr-0" id="myTab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <a class="nav-link border-radius-t-r text-white active font-size-18" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="home" aria-selected="true">توضیحات</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white font-size-18" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ویژگی های بازی</a>
                            </li>
                        </ul>
                        <div class="tab-content  " id="myTabContent">
                            <div class="tab-pane border-radius-b px-1 bg-black-75 fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row ">
                                    <div class="col-md-6" style="direction: ltr;">
                                        <div class="bg-black-85 my-2 mr-1 rounded overflow-auto" style="height: 313px;">
                                            <table class="table  table-borderless text-white text-center font-size-16" style="direction: rtl;">
                                                <thead>
                                                <tr class="border-custom-bottom">
                                                    <th scope="col" class="font-size-18">زبان ها</th>
                                                    <th scope="col">صوت</th>
                                                    <th scope="col">رابط کاربری</th>
                                                    <th scope="col">زیرنویس</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">انگلیسی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">عربی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6  ">
                                        <div class="bg-black-85 my-2 ml-2 p-1 rounded overflow-hidden" style="height: 313px;">
                                            <span>ویژگی ها</span>
                                            <hr class="bg-white">
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">تک نفره</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-users"></i><span class="mr-1">چند نفره شبکه ای</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی کامل از کنترلر</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی از فضای ابری</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">بازی با دوستان از دور</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">PVP چند نفره</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">Pvp</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">Co-op</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">بازی با یک مانیتور</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane border-radius-b px-1 bg-black-75 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row ">
                                    <div class="col-md-6" style="direction: ltr;">
                                        <div class="bg-black-85 my-2 mr-1 rounded overflow-auto" style="height: 313px;">
                                            <table class="table  table-borderless text-white text-center font-size-16" style="direction: rtl;">
                                                <thead>
                                                <tr class="border-custom-bottom">
                                                    <th scope="col" class="font-size-18">زبان ها</th>
                                                    <th scope="col">صوت</th>
                                                    <th scope="col">رابط کاربری</th>
                                                    <th scope="col">زیرنویس</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">انگلیسی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">عربی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">هندی</th>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                    <td><i class="fa fa-check text-success"></i></td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6  ">
                                        <div class="bg-black-85 my-2 ml-2 p-1 rounded overflow-hidden" style="height: 313px;">
                                            <span>ویژگی ها</span>
                                            <hr class="bg-white">
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">تک نفره</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-users"></i><span class="mr-1">چند نفره شبکه ای</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی کامل از کنترلر</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی از فضای ابری</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">بازی با دوستان از دور</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">PVP چند نفره</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">Pvp</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">Co-op</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">بازی با یک مانیتور</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 overflow-hidden" style="height: 400px;">
                    <ul class="nav border-radius-t  bg-black-50 pr-0" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link border-radius-t-r text-white active font-size-18" id="home-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="home" aria-selected="true">خرید محصول</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white font-size-18" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">پکیج ها</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white font-size-18" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">باندل ها</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white font-size-18" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">DLC</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white font-size-18" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">آیتم ها</a>
                        </li>
                    </ul>
                    <div class="tab-content  " id="myTabContent">
                        <div class="tab-pane border-radius-b px-1 bg-black-75 fade show active" id="buy" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row pt-4">
                                <div class="col-md-6">
                                    <span class="font-size-20 pr-3"><b>واحد پولی:</b></span>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label p-inherit" for="customRadioInline1">دلار</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label p-inherit" for="customRadioInline2">ریال</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label p-inherit" for="customCheck1">محاسبه خرید cdkey</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label p-inherit" for="customCheck1">محاسبه خرید گیفت</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane border-radius-b px-1 bg-black-75 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row ">
                                <div class="col-md-6" style="direction: ltr;">
                                    <div class="bg-black-85 my-2 mr-1 rounded overflow-auto" style="height: 313px;">
                                        <table class="table  table-borderless text-white text-center font-size-16" style="direction: rtl;">
                                            <thead>
                                            <tr class="border-custom-bottom">
                                                <th scope="col" class="font-size-18">زبان ها</th>
                                                <th scope="col">صوت</th>
                                                <th scope="col">رابط کاربری</th>
                                                <th scope="col">زیرنویس</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">انگلیسی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">عربی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">هندی</th>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6  ">
                                    <div class="bg-black-85 my-2 ml-2 p-1 rounded overflow-hidden" style="height: 313px;">
                                        <span>ویژگی ها</span>
                                        <hr class="bg-white">
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">تک نفره</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-users"></i><span class="mr-1">چند نفره شبکه ای</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی کامل از کنترلر</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">پشتیبانی از فضای ابری</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">بازی با دوستان از دور</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">PVP چند نفره</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">Pvp</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">Co-op</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">بازی با یک مانیتور</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div><i class="fa fa-user"></i><span class="mr-1">چند نفره لوکال</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
