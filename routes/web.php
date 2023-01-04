<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\PatrocinioController;
use App\Http\Controllers\PedidoprofessorController;


/* ------- Front ------- */
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/ballet', [PageController::class, 'ballet'])->name('ballet');
Route::get('/hiphop', [PageController::class, 'hiphop'])->name('hiphop');
Route::get('/oriental', [PageController::class, 'oriental'])->name('oriental');
Route::get('/espanhola', [PageController::class, 'espanhola'])->name('espanhola');
Route::get('/folclore', [PageController::class, 'folclore'])->name('folclore');
Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/inscricoes', [InscricaoController::class, 'inscricoes'])->name('inscricoes');

Route::get('/precomensal',[InscricaoController::class, 'precomensal']);

Route::get('/precoanual', [InscricaoController::class, 'precoanual']);

Route::get('/mapaaulas', [PageController::class, 'mapaaulas'])->name('mapaaulas');

Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registo', [InscricaoController::class, 'inscricoes'])->name('register');

Route::get('/mapaaulas', [PageController::class, 'mapaaulas'])->name('mapaaulas');

/* Pedido Professor */
Route::get('/professor', [PedidoprofessorController::class, 'create'])->name('professor');
Route::post('/professor', [PedidoprofessorController::class, 'store'])->name('register_professor');

/* patrocinio */
Route::get('/patrocinio', [PatrocinioController::class, 'create'])->name('patrocinio');
Route::post('/patrocinio', [PatrocinioController::class, 'store'])->name('register_patrocinio');


/* ------- landingPages ------- */
// landing pages Jéssica>Adriana>Diogo>Beatriz>Tiago
Route::get('/notificacoes', [PageController::class, 'notifications'])->name('notifications');
Route::get('/patrocinioland', [PageController::class, 'patrocinio'])->name('patrocinio');
Route::get('/festival', [PageController::class, 'festival'])->name('festival');

Route::get('/landingA', [PageController::class, 'landingA'])->name('landingA');
Route::get('/landingD', [PageController::class, 'landingD'])->name('landingD');
Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');
Route::get('/natal', [PageController::class, 'natal'])->name('natal');



Auth::routes();
Route::get('/register', [PageController::class, 'inscricoes'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* ------- Back ------- */
Route::get('/dashboardBO', [PageController::class, 'dashboardBO'])->name('dashboardBO');
Route::get('/admin/modalidades', [PageController::class, 'modalidades'])->name('modalidades');



Route::get('/admin/patrocinio', [PatrocinioController::class, 'index'])->name('patrocinios');
Route::get('/admin/patrocinio/show/{patrocinio}', [PatrocinioController::class, 'show'])->name('patrocinios.show');
Route::get('/admin/patrocinio/edit/{patrocinio}', [PatrocinioController::class, 'edit'])->name('patrocinios.edit');
Route::post('/admin/patrocinio/edit/{patrocinio}', [PatrocinioController::class, 'update'])->name('patrocinios.update');
Route::delete('/admin/patrocinio/delete/{patrocinio}', [PatrocinioController::class, 'destroy'])->name('patrocinios.destroy');

Route::get('/admin/pedprof', [PedidoprofessorController::class, 'index'])->name('pedidosprof');
Route::get('/admin/pedprof/show/{pedidos}', [PedidoprofessorController::class, 'show'])->name('pedprof.show');
Route::get('/admin/pedprof/edit/{pedidos}', [PedidoprofessorController::class, 'edit'])->name('pedprof.edit');
Route::post('/admin/pedprof/edit/{pedidos}', [PedidoprofessorController::class, 'update'])->name('pedprof.update');
/* download cv */
Route::get('/download/{file}', [PedidoprofessorController::class, 'download'])->name('cv_download'); 