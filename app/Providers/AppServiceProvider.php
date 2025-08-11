<?php

namespace App\Providers;

use App\Views\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $menu = [
        //     'Home' => '/',
        //     'About' => '/about',
        //     'Contact' => '/contact'
        // ];
        // View::share('menus', $menu);

        // View::composer('*', function ($view) use ($menu) { // * gunakan '*' jika ingin mengizinkan semua untuk menggunakannya.
        // View::composer(['working.index', 'working.show'], function ($view) use ($menu) { //* jika spesifik ada
        //     $view->with('menus', $menu);
        // });

        // * Dengan menggunakan composer kita juga bisa menyelipkan logic tertentu
        // View::composer(['working.index', 'working.show'], function ($view) {
        //     $menu = [
        //         'Home' => '/',
        //         'About' => '/about',
        //         'Contact' => '/contact'
        //     ];

        //     $authenticated = true;
        //     if ($authenticated) {
        //         $menu = array_merge($menu, [
        //             'Logout' => '/logout',
        //             'Profile' => 'profile'
        //         ]);
        //     }
        //     $view->with('menus', $menu);
        // });

        // * Memisahkan isi atau logic compose dengan meletakkan di dalam folder Views/Composer yang dibuat secara manual
        View::composer('*', MenuComposer::class);
    }
}
