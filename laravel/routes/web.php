<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View;


Route::controller(View::class)->group(function(){
  Route::get('/', 'Home');
});