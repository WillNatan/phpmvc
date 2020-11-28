<?php

use App\Classes\Route;
use App\Controllers\HomeController;

Route::set('', function() {
    HomeController::render('front_index');
});