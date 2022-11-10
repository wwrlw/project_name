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

Route::get('/', function () {
    return view('layouts/layout');
});
Route::get('/hello', function () {
    return view('main/hello');
});
Route::get('/about', function () {
    return view('main/about');
});
Route::get('/contact', function () {
    $contact = [
        'name' => 'Политех',
        'adres' => 'Пряники',
        'phone' => '8(495)433-2323',
        'email' => '@polytech.ru',
    ];
    return view('main/contact');
});