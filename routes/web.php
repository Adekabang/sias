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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    //admin
    Route::get('/mapel', 'MapelController@index')->name('admin.mapel');
    Route::get('mapel/create', 'MapelController@create')->name('admin.mapel.create');
    Route::post('mapel/store', 'MapelController@store')->name('admin.mapel.store');
});
