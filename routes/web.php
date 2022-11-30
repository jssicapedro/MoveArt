<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('/');

Route::get('/ballet', [PageController::class, 'ballet'])->name('ballet');

Route::get('/hiphop', [PageController::class, 'hiphop'])->name('hiphop');

Route::get('/oriental', [PageController::class, 'oriental'])->name('oriental');

Route::get('/espanhola', [PageController::class, 'espanhola'])->name('espanhola');

Route::get('/folclore', [PageController::class, 'folclore'])->name('folclore');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/inscricoes', [PageController::class, 'inscricoes'])->name('inscricoes');

Route::get('/mapaaulas', [PageController::class, 'mapaaulas'])->name('mapaaulas');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
