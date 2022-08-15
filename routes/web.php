<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Controller@home_page')->name('home');
Route::get('/about-us', 'App\Http\Controllers\Controller@about_us_page')->name('about-us');
Route::get('/services', 'App\Http\Controllers\Controller@services_page')->name('services');
Route::get('/service-details', 'App\Http\Controllers\Controller@service_detail_page')->name('service-details');
Route::get('/contact', 'App\Http\Controllers\Controller@contact_page')->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
