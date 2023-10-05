<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Login;
use App\Http\Controllers\Marketplace;
use App\Http\Controllers\History;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get'], '/', [Login::class, 'index'])->name('index');

Route::name('login.')->group(function () {
    $parent = "login";
    $controller = Login::class;
    Route::match(['get', 'post'], $parent . '/', $controller . '@index')->name('index');
    Route::match(['post'], $parent . '/auth', $controller . '@auth')->name('auth');
    Route::match(['get', 'post'], $parent . '/gagal', $controller . '@information_failed')->name('gagal');
});


Route::group(['middleware' => 'auth.login'], function () {
    Route::name('marketplace.')->group(function () {
        $parent = "marketplace";
        $controller = Marketplace::class;
        Route::match(['get'], $parent . '/', $controller . '@index')->name('index');
    });

    Route::name('history.')->group(function () {
        $parent = "history";
        $controller = History::class;
        Route::match(['get'], $parent . '/', $controller . '@index')->name('index');
    });
});