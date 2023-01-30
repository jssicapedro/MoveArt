<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\FaqsController;

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

Route::get('/eventosFO', [PageController::class, 'eventosFO'])->name('eventosFO');

Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');

Route::get('/dashboardBO', [PageController::class, 'dashboardBO'])->name('dashboardBO');



Auth::routes();

Route::get('/registo', [InscricaoController::class, 'inscricoes'])->name('register');
Route::get('/mapaaulas', [PageController::class, 'mapaaulas'])->name('mapaaulas');


/* ------- landingPages ------- */
// landing pages Jéssica>Adriana>Diogo>Beatriz>Tiago


Route::get('/notificacoes', [PageController::class, 'notifications'])->name('notifications');
Route::get('/landingA', [PageController::class, 'landingA'])->name('landingA');
Route::get('/landingD', [PageController::class, 'landingD'])->name('landingD');
Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');
Route::get('/natal', [PageController::class, 'natal'])->name('natal');



Auth::routes();
Route::get('/register', [PageController::class, 'inscricoes'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* ------- Back ------- */
Route::get('/admin/modalidades', [PageController::class, 'modalidades'])->name('modalidades');

/*EventosBO
Route::get('/eventos/novo', [EventosController::class, 'create']);
Route::post('/eventos/novo', [EventosController::class, 'store'])->name('registar_evento');
Route::get('/eventos/ver/{id}', [EventosController::class, 'show']);
Route::get('/eventos/editar/{id}', [EventosController::class, 'edit']);
Route::post('/eventos/editar/{id}', [EventosController::class, 'update'])->name('alterar_evento');
Route::get('/eventos/excluir/{id}', [EventosController::class, 'delete']);
Route::post('/eventos/excluir/{id}', [EventosController::class, 'destroy'])->name('excluir_evento');
*/

Route::resource("/evento", EventosController::class);
Route::resource("/faqsBO", FaqsController::class);
