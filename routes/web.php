<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // This will display the index.blade.php
});