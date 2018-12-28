laravel-admin login-captch
======
注：没有引入captcha请执行

    composer require mews/captcha

修改config/app.php
    
    'providers' => [
        // ...
        Mews\Captcha\CaptchaServiceProvider::class,
    ]   

     'aliases' => [
        // ...
        'Captcha' => Mews\Captcha\Facades\Captcha::class,
    ]

Installation
First, install dependencies:

    composer require james/login-captcha
 
Configuration
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'login-captcha' => [
             // set to false if you want to disable this extension
             'enable' => true,
         ]
     ]
 
 