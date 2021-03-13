<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/users/user/{id}', [UserController::class, 'showUsersId']);
Route::get('/users/create', [UserController::class, 'createUser']);
Route::post('/users/create', [UserController::class, 'saveUser'])->name('createUser');
Route::get('/users/view/{id}', [UserController::class, 'viewUser']);
Route::post('/user/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');
