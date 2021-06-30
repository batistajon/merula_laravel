<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//alterar constantes https://github.com/pagseguro/pagseguro-sdk-php/blob/master/public/Configuration/README.md
//Class PagSeguro\Configuration\Wrapper located in ./vendor/pagseguro/pagseguro-php-sdk/source/Configuration/Wrapper-example.php does not comply with psr-4 autoloading standard. Skipping.

Route::prefix('v1')->group(function () {
    
    Route::get('/', function () {
        return response()->json(['ola' => 'mundo']);
    });
});