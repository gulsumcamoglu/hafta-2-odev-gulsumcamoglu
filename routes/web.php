<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;


Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin', function () {
    return view('admin.index');
});

Route::resource('cat', CatController::class);
