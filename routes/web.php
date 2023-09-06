<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Auth::routes();


Route::get('/', [
    HomeController::class, 'index'
])->name('welcome');

Route::get('/client/{acctNo}', [HomeController::class, 'client'])->name('client.index');
Route::get('/client/print-soa/{id}', [HomeController::class, 'printSoa'])->name('client.print-soa');