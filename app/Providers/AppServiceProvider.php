<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Str::macro('readingTime', function (...$text) {
            $totalWords = str_word_count(implode(' ', $text));

            $minutes = ceil($totalWords / 200);
            $minutes = max(1, $minutes);

            return ($minutes > 1) ? $minutes . ' minutes' : $minutes . ' minute';
        });
    }
}
