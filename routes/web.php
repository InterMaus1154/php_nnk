<?php

use Core\Route;
use Core\Redirect;
use Core\Response;

Route::get('/', function (){
    return response()->view('dashboard');
});
