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
    $fullname = 'Domenico Galileo';
    return view('home', compact('fullname'));
});

Route::get('/posts', function () {
    $posts = ['learn php', 'learn phiton', 'learn css'];
    return view('posts', compact('posts'));
})->name('posts');

