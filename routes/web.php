<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('dashboard');
})->name('dashboard');

// Route::group(['middleware'=>'auth'], function(){

//     Route::get('/dashboard', 'dashboard');
// });

Route::group(['middleware' => 'auth'], function () {

    // genre
    //Route::get('../genre', 'Genre_controller@index');
    //Route::get('../genre/add', 'Genre_controller@add');
    //Route::post('../genre/add', 'Genre_controller@store');
    //Route::get('../genre/{id}', 'Genre_controller@edit');
    //Route::put('../genre/{id}', 'Genre_controller@update');
    //Route::delete('../genre/{id}', 'Genre_controller@delete');

    // book
    Route::get('/listofbook', 'App\Http\Controllers\book_controller@index');
    Route::get('/addBook', 'App\Http\Controllers\book_controller@addbookview');
    Route::post('/addBook', 'App\Http\Controllers\book_controller@addbookstore');
    Route::get('/listofbook/edit/{id}', 'App\Http\Controllers\book_controller@edit');
    Route::patch('/updatebook/{id}', 'App\Http\Controllers\book_controller@update');
    Route::get('/dashboard/book', 'book_controller@add');
    Route::post('/dashboard/book', 'book_controller@store');
    Route::get('/dashboard/bookrev', 'bookrev_controller@index');
});

//transaction
Route::get('/dashboard', 'App\Http\Controllers\TransactionController@index');
Route::get('/dashboard/create', 'App\Http\Controllers\TransactionController@create');
Route::post('/dashboard/store', 'App\Http\Controllers\TransactionController@store');

//Book
// Route::get('/listofbook', 'App\Http\Controllers\book_controller@index');
