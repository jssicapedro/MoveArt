<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/hiphop', [PageController::class, 'hiphop'])->name('hiphop');

Route::get('/oriental', [PageController::class, 'oriental'])->name('oriental');

Route::get('/espanhola', [PageController::class, 'espanhola'])->name('espanhola');

Route::get('/folclore', [PageController::class, 'folclore'])->name('folclore');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/inscricoes', [PageController::class, 'inscricoes'])->name('inscricoes');

Route::get('/mapaaulas', [PageController::class, 'mapaaulas'])->name('mapaaulas');


require __DIR__.'/auth.php';
