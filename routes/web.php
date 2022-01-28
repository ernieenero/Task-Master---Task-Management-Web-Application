<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Subjects;
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

Route::get('/create', [Registration::class, 'create'])->middleware(['guest'])->name('create');
Route::get('/task_master/{id}', [Registration::class, 'show'])->middleware(['auth'])->name('profile');
Route::get('/about', [Registration::class, 'about'])->middleware(['guest'])->name('about');
Route::get('/us', [Registration::class, 'us'])->middleware(['guest'])->name('us');
Route::get('/task_master/edit/{id}', [Registration::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/task_master/edit/{id}', [Registration::class, 'update'])->middleware(['auth'])->name('update');


Route::get('/login', [Authentication::class, 'create'])->middleware(['guest'])->name('login.create');
Route::post('/login', [Authentication::class, 'store'])->name('login.store');
Route::post('/login/destroy', [Authentication::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('/task-master/{id}', [Subjects::class, 'create'])->middleware(['auth'])->name('user-home');
Route::post('/task-master/{id}', [Subjects::class, 'store'])->middleware(['auth'])->name('subject.store');
Route::get('/task-master/{user_id}/edit/{subject_id}', [Subjects::class, 'edit'])->middleware(['auth'])->name('subject.edit');
Route::post('/task-master/{user_id}/edit/{subject_id}', [Subjects::class, 'update'])->middleware(['auth'])->name('subject.update');
Route::get('/task-master/{user_id}/delete/{subject_id}', [Subjects::class, 'destroy'])->middleware(['auth'])->name('subject.destroy');
require __DIR__.'/auth.php';
