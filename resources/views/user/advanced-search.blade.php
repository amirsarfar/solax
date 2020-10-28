@extends('layouts.app')

@section('title')
    KeyMe :: single
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('css/advanced-search.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <section>
            <div class="row mt-5">
                <div class="col-md-4 order-2 order-md-1">
                    <div class="bg-4 rounded p-3 mt-2 border-warning">
                        <h6>جستجو شده :</h6>
                        @for($i=1; $i<8;$i++)
                            <span class="align-items-center d-inline-flex mt-2 rounded p-1 bg-5 mx-1"> 
                                <i class="fas fa-times pl-1"></i>واقعیت مجازی</span>
                        @endfor
                    </div>
                    <div class="bg-4 rounded p-3 mt-2 border-warning">
                        <h6>تازه ترین بازی ها</h6>
                        <hr class="bg-warning">
                        @for($i=1; $i<8;$i++)
                            <div class="d-flex justify-content-end my-1">
                                <div class="d-flex justify-content-space-between text-left ">
                                    <div class=" py-2">
                                        <span class="text-color-4 font-size-14">‏2Dota برای بازی New Bloom آپدیت </span>
                                    </div>
                                    <div>
                                        <img src="{{asset('images/games/game-'.$i.'.jpg')}}" alt="" width="150"
                                             height="85"
                                             class="rounded">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-8 order-1 order-md-2">
                    <div class="bg-4 p-2 rounded">
                        <div class="d-flex flex-column-reverse flex-md-row">
                            <div>
                                <div
                                    class="border-warning ml-5 mt-2 mt-md-0 text-white align-items-center form-control bg-transparent rounded"
                                    onclick="fillter()">
                                    جستجوی پیشرفته
                                    <i class="fas fa-stream "></i>
                                </div>
                            </div>
                            <form action="#" class="input-group mr-md-2">
                                <div class="input-group ">
                                    <input type="text" class="form-control bg-4 text-white border-warning"
                                           placeholder="بازی مورد نظر تو را جستجو کن" aria-label="Recipient's username"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="submit"  class="input-group-text bg-warning border-0" id="basic-addon2"><i
                                                class="fas fa-search text-dark"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-2" id="filter" style="display: none">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">منتشر کنننده</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>steam</option>
                                        <option>steam</option>
                                        <option>steam</option>
                                        <option>steam</option>
                                        <option>steam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">میزان رضایت مندی</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>100%</option>
                                        <option>100%</option>
                                        <option>100%</option>
                                        <option>100%</option>
                                        <option>100%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">تعداد بازیکنان</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>25 نفر</option>
                                        <option>25 نفر</option>
                                        <option>25 نفر</option>
                                        <option>25 نفر</option>
                                        <option>25 نفر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">نام توسعه دهنده</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>سجاد کیانی</option>
                                        <option>سجاد کیانی</option>
                                        <option>سجاد کیانی</option>
                                        <option>سجاد کیانی</option>
                                        <option>سجاد کیانی</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">تاریخ انتشار</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>1399/10/01</option>
                                        <option>1399/10/01</option>
                                        <option>1399/10/01</option>
                                        <option>1399/10/01</option>
                                        <option>1399/10/01</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">ریجن</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>ایران</option>
                                        <option>ایران</option>
                                        <option>ایران</option>
                                        <option>ایران</option>
                                        <option>ایران</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">نام دسته بندی</label>
                                    <select class="form-control bg-black-85 border-0 text-white">
                                        <option>همه موارد</option>
                                        <option>همه موارد</option>
                                        <option>همه موارد</option>
                                        <option>همه موارد</option>
                                        <option>همه موارد</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="اعمال فیلتر" class="btn btn-success float-left">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  ">
                        <div class="col-12 ">
                            <div
                                class="alert mb-0 alert-success alert-success-custom border-0 mt-2 alert-dismissible fade show"
                                role="alert">
                                <strong class="text-warning-custom font-size-20">توجه :</strong><Br>
                                <span class="text-white mt-1">Windows یا Oculus Rift ،: HTC Vive به یکی از هدست  .مراجعه کنید VR برای اطلاعات بیشتر به بخش پشتیبانی. Mixed Reality.
                                    </span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-4 p-3 mt-2 rounded">
                        <div class="row  m-0 rounded  bg-black-50   mt-2 p-2  align-items-center">
                                <div  class="col-md-6">
                                    <div class="d-flex justify-content-space-around">
                                        <span > تعداد بازیکنان<i class="fas fa-sort pr-1"></i></span>
                                        <span > رضایت مندی<i class="fas fa-sort pr-1"></i></span>
                                        <span >پایان تخفیف<i class="fas fa-sort pr-1"></i></span>
                                        <span >درصد تخفیف<i class="fas fa-sort pr-1"></i></span>
                                        <span >قیمت (تومان)<i class="fas fa-sort pr-1"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class=" float-left">
                                        27مورد یافت شد
                                    </div>
                                </div>
                        </div>
                        @for ($i = 1; $i < 12; $i++)
                        <div class="row  m-0 rounded  bg-black-50   mt-2  align-items-center" style="padding-left:0px !important; ">
                            <div class="col-md-6 d-none d-md-block">
                                <div class="d-flex justify-content-around">
                                <span class="mr-3">{{$i}}</span>
                                        <span class="mr-3">98%</span>
                                        <span class="mr-3">99/11/26</span>
                                        <span class="mr-3">26%</span>
                                        <span class="mr-3">36,000</span>
                                </div>
                            </div>
                            <div class="col-md-6 p-0 m-0">
                                <div class="d-flex justify-content-xl-end">
                                    <div class="ml-1 text-left d-flex flex-column justify-content-space-between">
                                        <span class="font-size-16">Worms Armageddon</span>
                                        <div class="text-black-50">
                                            <span class="border-left  font-size-14 px-2">نام دسته بندی</span>
                                            <span class="border-left font-size-14 px-2">1399/11/15</span>
                                            <span class="">4.5</span>
                                            <img class=" " src="{{asset('images/icon/icon-1.png')}}" alt="" width="18" height="18">
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{asset('images/games/game-'.$i.'.jpg')}}" width="100" height="60"
                                         class="rounded">
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
        </section>
    </div>
@endsection
@section('script')
    <script>
        function fillter() {
            $('#filter').slideToggle(1000);
        }
    </script>
@endsection
