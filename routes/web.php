<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return csrf_token();
});
