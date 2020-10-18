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
        return redirect('/');
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
});


