@extends('layouts.app')

@section('title')
    KeyMe :: Login
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">    
@endsection

@section('main-content')

    <div class="login-forms-wrapper">
        <img src="images/ph2.jpg" alt="phantom" class="back">
        <div class="row h-100 form-outer">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col">
                        <div class="row mb-4">
                            <div class="col form-tab active" data-target="#login">ورود</div>
                            <div class="col form-tab" data-target="#signup">ثبت نام</div>
                        </div>

                        <div class="single-form" id="signup">
                            <form action="/t" method="GET">
                                @csrf
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirm">تکرار رمز عبور</label>
                                    <input type="password" name="password_confirm" class="form-control" id="password_confirm">
                                </div>
                                <div class="capcha-mock">

                                </div>

                                <button type="submit" class="btn btn-success w-100">ثبت نام</button>
                            </form>

                            <button type="submit" class="btn btn-danger mt-3 w-100">Sign Up <i class="fab fa-google"></i></button>
                        </div>

                        <div class="single-form active" id="login">
                            <form action="">
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input type="text" class="form-control" id="password">
                                </div>
                                <div class="capcha-mock">

                                </div>
                                <div class="form-check mb-3">
                                    <label class="form-check-label d-flex justify-content-between">
                                      <input class="form-check-input" type="checkbox">
                                      مرا به خاطر بسپار
                                      <div class="forget-link">فراموشی رمز عبور</div>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-success w-100">ورود</button>
                            </form>

                            <button type="submit" class="btn btn-danger mt-3 w-100">Sign In <i class="fab fa-google"></i></button>
                        </div>

                        <div class="single-form" id="forget-password">
                            <div class="row mb-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده 
                            </div>
                            <form action="">
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="capcha-mock">

                                </div>

                                <button type="submit" class="btn btn-success w-100">بازیابی رمز عبور</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/loginpage.js') }}"></script>
@endsection