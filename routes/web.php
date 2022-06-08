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
    $languages = ['PHP', 'JS', 'CSS'];
    return view('home', compact('languages'));
})->name('home');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

Route::get('/php', function () {
    return view('php');
})->name('php');

Route::get('/css', function () {
    return view('css');
})->name('css');

Route::get('/js', function () {
    return view('js');
})->name('js');

