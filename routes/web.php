<?php

use Machine\Auth\Auth;
use Machine\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::Routes();


