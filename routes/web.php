<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/contacts', [ContactController::class, 'getContacts'])->name('contacts');
    Route::get('/messages/{contact}', [ContactController::class, 'getMessages'])->name('messages');

    Route::post('/messages/{contact}/send', [ContactController::class, 'sendMessage'])->name('messages.send');
});
