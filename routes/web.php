<?php

use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ThreadController;
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

Route::controller(ThreadController::class)->group(function () {
    Route::get('/threads', 'index')->name('threads');
    Route::get('/threads/create', 'create')->middleware('auth');
    Route::post('/threads', 'store')->middleware('auth');
    Route::get('/threads/{channel}/{thread}', 'show');
});

Route::controller(ReplyController::class)->group(function () {
    Route::post('/threads/{channel}/{thread}/replies', 'store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
