<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/t', function (Request $request) {
    ddd($request->all());
});

Route::get('setLocale/{locale}',function($locale){
    if (! in_array($locale, ['en', 'fa'])) {
        Session::put('locale','fa');
        return redirect()->back();
    }

    Session::put('locale',$locale);
    //return redirect('/');
    return redirect()->back();
});

Route::group(['middleware'=>'language'],function ()
{
    Route::get('/', function () {
        return view('homepage');
    })->name('homepage');

    Route::get('/login', function () {
        return view('loginpage');
    })->name('login');

    Route::get('/contactus', function () {
        return view('contact');
    })->name('contact');

    Route::get('/single', function () {
        return view('user.single');
    })->name('single');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/articles', function () {
        return view('article.index');
    })->name('articles');
    
    Route::get('/article/single', function () {
        return view('user.articles.single');
    })->name('article.single');

    Route::get('/advance-search', function () {
        return view('user.advanced-search');
    });
    
});



/* Avoids 404
Route::any('{query}',
  function() { return redirect('/'); })
  ->where('query', '.*');
*/
