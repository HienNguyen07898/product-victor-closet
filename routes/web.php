<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::controller(Controllers\HomeController::class)->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
});
