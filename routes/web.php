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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('layouts.index');
})->name('dashboard');

// Route::group(['middleware'=>'auth'], function(){

//     Route::get('/dashboard', 'dashboard');
// });

Route::group(['middleware'=>'auth'], function(){

    // genre
    Route::get('../genre', 'Genre_controller@index');
    Route::get('../genre/add', 'Genre_controller@add');
    Route::post('../genre/add', 'Genre_controller@store');
    Route::get('../genre/{id}', 'Genre_controller@edit');
    Route::put('../genre/{id}', 'Genre_controller@update');
    Route::delete('../genre/{id}', 'Genre_controller@delete');

    // book
    Route::get('../genre', 'Genre_controller@index');
    Route::get('../genre', 'Genre_controller@add');
    Route::post('../genre', 'Genre_controller@store');
    Route::get('../genre', 'Genre_controller@edit');
});