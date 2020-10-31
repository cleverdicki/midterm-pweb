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

Route::group(['middleware' => 'auth'], function () {
    //transaction
    Route::get('/dashboard', 'App\Http\Controllers\TransactionController@index');
    Route::get('/dashboard/create', 'App\Http\Controllers\TransactionController@create');
    Route::post('/dashboard/store', 'App\Http\Controllers\TransactionController@store');

    // book
    Route::get('/listofbook', 'App\Http\Controllers\book_controller@index');
    Route::get('/listofbook/edit/{id}', 'App\Http\Controllers\book_controller@editbook');
    Route::patch('/listofbook/updatebook/{id}', 'App\Http\Controllers\book_controller@updatebook');
    Route::get('/addBook', 'App\Http\Controllers\book_controller@addbookview');
    Route::post('/addBook', 'App\Http\Controllers\book_controller@addbookstore');
    Route::get('/listofbook/review/{title}', 'App\Http\Controllers\bookrev_controller@index');
    Route::get('/listofbook/review/book/{title}', 'App\Http\Controllers\bookrev_controller@addrev');
    Route::post('/listofbook/review/book/{title}', 'App\Http\Controllers\bookrev_controller@addrevbook');
    Route::get('/listofbook/editreview/book/{id}', 'App\Http\Controllers\bookrev_controller@editrev');
    Route::patch('/listofbook/editreview/book/{id}', 'App\Http\Controllers\bookrev_controller@updaterev');
    Route::delete('/listofbook/editreview/book/', 'App\Http\Controllers\bookrev_controller@deleterev')->name('delete.review');
    Route::delete('/listofbook/editbook/book/', 'App\Http\Controllers\book_controller@deletebook')->name('delete.book');

    // report
    Route::get('/report', 'App\Http\Controllers\ReportsController@index');
    Route::get('/report/trs/pdf', 'App\Http\Controllers\ReportsController@transactionPdf');
    // Route::get('/report/trs/excl', 'App\Http\Controllers\ReportsController@reportExcl');
    Route::get('/report/book/pdf', 'App\Http\Controllers\ReportsController@bookPdf');
    // Route::get('/report/book/excl', 'App\Http\Controllers\ReportsController@bookExcl');
});
