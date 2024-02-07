<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index'])->name("home");

Route::get('/articoli', [AppController::class, 'articoli'])->name("articoli");

Route::get('/articoli/{id}', [AppController::class,'dettaglio'])->name("articoli.dettaglio");

Route::get('/contatti', [AppController::class,'contatti'])->name("contatti");

Route::post("contatti/mail", [AppController::class,"InviaMail"])->name("send.email");
