<?php

namespace Encore\James;

use Illuminate\Support\ServiceProvider;

class JamesServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(James $extension)
    {
        if (! James::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'login-captcha');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/login-captcha')],
                'login-captcha'
            );
        }

        $this->app->booted(function () {
            James::routes(__DIR__.'/../routes/web.php');
        });
    }
}