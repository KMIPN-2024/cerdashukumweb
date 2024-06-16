<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('min_words', function ($attribute, $value, $parameters, $validator) {
            $minWords = $parameters[0];
            $wordCount = str_word_count($value);
            return $wordCount >= $minWords;
        });

        Validator::replacer('min_words', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':min_words', $parameters[0], $message);
        });
        
        Validator::extend('max_words', function ($attribute, $value, $parameters, $validator) {
            $maxWords = $parameters[0];
            $wordCount = str_word_count($value);
            return $wordCount <= $maxWords;
        });

        Validator::replacer('max_words', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max_words', $parameters[0], $message);
        });
    }
}
