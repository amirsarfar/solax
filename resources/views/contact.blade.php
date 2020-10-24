@extends('layouts.app')

@section('title')
    KeyMe :: Contact Us
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection 

@section('main-content')

<div class="row main-min-height">
  <div class="col d-flex">
    <div class="row w-90 bg-card m-auto border-r-all max-w-0">
      <div class="col-md-4 d-none d-md-flex">
        <div class="overlay-description border-r-all bg-2 border-2">
          <div class="row no-gutters p-3">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با 
          </div>
          <div class="row no-gutters p-3 align-items-center">
            <div class="col-3 d-flex justify-content-center"><i class="fal fa-phone fa-lg" style="color: orange"></i></div>
            <div class="col-9 pr-3">
              <div class="row">تلفن تماس</div>
              <div class="row">021-55667788</div>
            </div>
          </div>
          <div class="row no-gutters p-3 align-items-center">
            <div class="col-3 d-flex justify-content-center"><i class="fal fa-envelope fa-lg" style="color: lightseagreen"></i></div>
            <div class="col-9 pr-3">
              <div class="row">تلفن تماس</div>
              <div class="row">021-55667788</div>
            </div>
          </div>
          <div class="row no-gutters p-3 align-items-center">
            <div class="col-3 d-flex justify-content-center"><i class="fal fa-map-marker-alt fa-lg" style="color: violet"></i></div>
            <div class="col-9 pr-3">
              <div class="row">تلفن تماس</div>
              <div class="row">021-55667788</div>
            </div>
          </div>
          <div class="row no-gutters p-3 justify-content-center">----------- با ما در ارتباط باشید -----------</div>
          <div class="row no-gutters p-3 justify-content-around">
            <div><a href=""><i class="fab fa-instagram fa-2x"></a></i></div>
            <div><a href=""><i class="fab fa-youtube fa-2x"></i></a></div>
            <div><a href=""><i class="fab fa-discord fa-2x"></i></a></div>
            <div><a href=""><i class="fab fa-twitch fa-2x"></i></a></div>
            <div><a href=""><i class="fab fa-twitter fa-2x"></i></a></div>
            <div><a href=""><i class="fab fa-telegram-plane fa-2x"></i></a></div>
            <div><a href=""><i class="fab fa-facebook-f fa-2x"></i></a></div>
          </div>
        </div>
      </div>
      <div class="col-md-8 py-4 px-5">
        <form action="" class="contact-form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="نام و نام خانوادگی *">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="ایمیل *">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="موضوع پیام *">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="متن پیام خود را وارد کنید"></textarea>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
              <button type="submit" class="btn btn-success w-100">ارسال</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

@endsection 