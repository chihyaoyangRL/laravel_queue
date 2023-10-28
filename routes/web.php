<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueuePost;

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

Route::get('QueuePost/index/{edital}', [QueuePost::class, 'index'])->name('QueuePost.index');
Route::post('QueuePost/cadastro', [QueuePost::class, 'cadastro'])->name('QueuePost.cadastro');