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
    //Route::get('/dashboard/book', 'book_controller@index');
    //Route::get('/dashboard/book', 'book_controller@add');
    //Route::post('/dashboard/book', 'book_controller@store');
    //Route::get('dashboard/book', 'book_controller@edit');

    //Route::get('/dashboard/bookrev', 'bookrev_controller@index');
});

//transaction
Route::get('dashboard', 'App\Http\Controllers\TransactionController@index');
Route::get('/dashboard/create', 'App\Http\Controllers\TransactionController@create');
Route::post('/dashboard/store', 'App\Http\Controllers\TransactionController@store');

//Book
Route::get('/addBook', 'App\Http\Controllers\book_controller@addbookview');
Route::post('addBook', 'App\Http\Controllers\book_controller@addbookstore');
Route::get('/editBook/{id}', 'App\Http\Controllers\book_controller@editbook');
Route::put('/updateBook/{id}', 'App\Http\Controllers\book_controller@updatebook');
Route::delete('/deleteBook/{id}', 'App\Http\Controllers\book_controller@deletebook');

//Review
Route::get('/addRev', 'App\Http\Controllers\book_controller@addrev');
Route::post('addRev', 'App\Http\Controllers\book_controller@storerev');
Route::get('/editRev/{title}', 'App\Http\Controllers\bookrev_controller@editrev');
Route::put('/updateRev/{title}', 'App\Http\Controllers\bookrev_controller@updaterev');
Route::delete('/deleteRev/{title}', 'App\Http\Controllers\bookrev_controller@deleterev');