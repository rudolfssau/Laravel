<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/admin/users/user/{id}', [UserController::class, 'showUsersId']);
Route::get('/admin/users/', [UserController::class, 'allUsers'])->name('allUsers');
Route::get('/admin/users/create', [UserController::class, 'createUser']);
Route::post('/admin/users/create', [UserController::class, 'saveUser'])->name('createUser');
Route::get('/admin/users/view/{id}', [UserController::class, 'viewUser'])->name('viewuser');
Route::post('/admin/user/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');
Route::post('/admin/users/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

Route::get('/user/login', [AuthController::class, 'login'])->name('login');
Route::post('/user/signin', [AuthController::class, 'signin'])->name('signin');
