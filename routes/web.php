<?php

use App\Http\Controllers\TaskController;
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
    return view('home');
});
Route::get('/index', [TaskController::class, 'index'])->name('index');
Route::post('/create', [TaskController::class, 'store'])->name('create');
Route::post('/edit', [TaskController::class, 'edit'])->name('edit');

