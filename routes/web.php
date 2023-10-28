<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportarRespostas;


use App\Http\Controllers\Queue;

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


Route::get('/importarRes/{edital}', [ImportarRespostas::class, 'importacao'])->name('importarRes.importacao');




Route::post('/importarRes', [ImportarRespostas::class, 'importacaoAAAAA'])->name('importarRes.importacaoAAAAA');


// Route::post('/queue/run_report', [ImportarRespostas::class, 'importacaoAAAAA'])->name('importarRes.importacaoAAAAA');


// Route::any('/queue/run_report', [Queue::class, 'runServerReport'])->name('Queue.runServerReport');
