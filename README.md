laravel-admin login-captch
======

注意：laravel-admin 版本小于1.6.10，大于1.6.10会导致验证码失败（待修复）

Installation
First, install dependencies:

    composer require james.xue/login-captcha
 
Configuration
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'login-captcha' => [
             // set to false if you want to disable this extension
             'enable' => true,
         ]
     ]
     
### 修改中文

    php artisan vendor:publish --tag=lang
    
### 输入框背景透明化

在config/admin.php 中添加 

	'background' => true,

    
