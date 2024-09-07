<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::get('/about',function(){
    return "About Page";

});

Route::get('/main',[MainController::class ,'index']);
// utilizando parametro 
Route::get('/test/{value}',[test::class,'test']);

