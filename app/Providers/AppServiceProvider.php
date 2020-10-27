<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $object3 = (object) ['id' => 3, 'title' => 'تست', 'link' => '/y', 'parent' => 1, 'icon' => 'edit', 'hasChild' => false];
        $object2 = (object) ['id' => 2, 'title' => 'تودرتو', 'link' => '/n', 'parent' => 1, 'icon' => 'search', 'hasChild' => false];
        $object5 = (object) ['id' => 5, 'title' => 'تست', 'link' => '/y', 'parent' => 4, 'icon' => 'music', 'hasChild' => false];
        $object6 = (object) ['id' => 6, 'title' => 'تودرتو', 'link' => '/n', 'parent' => 4, 'icon' => 'heart', 'hasChild' => false];
        $object1 = (object) ['id' => 1, 'title' => 'صفحه اصلی', 'link' => '/', 'parent' => null, 'icon' => 'home', 'hasChild' => false];
        $object4 = (object) ['id' => 4, 'title' => 'دسته بندی', 'link' => '/u', 'parent' => null, 'icon' => 'list', 'hasChild' => true, 'children' => [$object5, $object6]];
        $object7 = (object) ['id' => 7, 'title' => 'استریم  ها', 'link' => '/u', 'parent' => null, 'icon' => 'video', 'hasChild' => true, 'children' => [$object3, $object5]];
        $object8 = (object) ['id' => 8, 'title' => 'اخبار', 'link' => '/u', 'parent' => null, 'icon' => 'newspaper', 'hasChild' => true, 'children' => [$object2, $object3]];
        $object9 = (object) ['id' => 9, 'title' => 'سوالات متداول', 'link' => '/faq', 'parent' => null, 'icon' => 'question', 'hasChild' => false];
        
        View::share('sidebarItems', [
            $object1,
            $object4,
            $object7,
            $object8,
            $object9
        ]);
    }
}
