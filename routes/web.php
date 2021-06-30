<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //alterar constantes https://github.com/pagseguro/pagseguro-sdk-php/blob/master/public/Configuration/README.md
    //Class PagSeguro\Configuration\Wrapper located in ./vendor/pagseguro/pagseguro-php-sdk/source/Configuration/Wrapper-example.php does not comply with psr-4 autoloading standard. Skipping.
});
