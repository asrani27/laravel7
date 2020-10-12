<?php

use App\Events\MyEvent;
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

Route::get('/', 'MailController@index');
Route::get('/pegawai', 'PegawaiController@index');
Route::post('/angka/{id}/update', 'PegawaiController@update');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/role/save', 'HomeController@roleSave');
Route::get('export', 'HomeController@export');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('notif/{name}', function ($name) {
    event(new MyEvent($name));
    return back();
});

Route::get('testing', function () {
    return view('testing');
});


// Route::get('pegawai', function () {
//     return view('testing');
// });
