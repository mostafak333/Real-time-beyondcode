<?php

use App\Events\GetRequestEvent;
use App\Http\Controllers\MesssageController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/sender/{data}', function ($data) {
    echo "<p>You have sent $data</p>";
    event(new GetRequestEvent($data));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reciver', function () {
    return view('reciver');
});

Route::resource('messages', MesssageController::class);
Route::get('/sender', [App\Http\Controllers\MesssageController::class, 'sender'])->name('sender');
Route::get('/reciver', [App\Http\Controllers\MesssageController::class, 'reciver'])->name('reciver');
Route::get('/send', [App\Http\Controllers\MesssageController::class, 'send']);
