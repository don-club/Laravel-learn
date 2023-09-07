<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/debug', 'App\Http\Controllers\MainController@debug');
Route::get('/', 'App\Http\Controllers\MainController@redirect');
Route::get('/contact', 'App\Http\Controllers\MainController@contact');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/categories', 'App\Http\Controllers\MainController@categories');

//categories route

Route::get('/iphone', 'App\Http\Controllers\MainController@iphone');
Route::get('/redmi', 'App\Http\Controllers\MainController@redmi');
Route::get('/motorola', 'App\Http\Controllers\MainController@motorola');
Route::get('/samsung', 'App\Http\Controllers\MainController@samsung');

//Submit routes

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');


