<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\userController;

Route::resource('/', 'userController');
Route::get('/about', [userController::class, 'about'])->name('about');
Route::get('/us', [userController::class, 'us'])->name('us');
Route::get('/login', [userController::class, 'login'])->name('login');
