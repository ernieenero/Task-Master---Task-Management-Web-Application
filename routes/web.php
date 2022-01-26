<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Authentication;
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

Route::resource('/', 'Registration');

Route::get('/create', [Registration::class, 'create'])->middleware('guest')->name('create');

Route::get('/task_master/{id}', [Registration::class, 'show'])->name('profile');

Route::get('/about', [Registration::class, 'about'])->name('about');

Route::get('/us', [Registration::class, 'us'])->name('us');
Route::get('/task_master/edit/{id}', [Registration::class, 'edit'])->name('edit');
Route::post('/task_master/edit/{id}', [Registration::class, 'update'])->name('update');



Route::get('/login', [Authentication::class, 'create'])->middleware('guest')->name('login.create');
Route::post('/login', [Authentication::class, 'store'])->name('login.store');
Route::post('/login/destroy', [Authentication::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('/task-master', function () {
    return view('appLayout/subject-list');
})->middleware(['auth'])->name('subject-list');

require __DIR__.'/auth.php';
