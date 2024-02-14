<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class, 'index']);
Route::get('/{blog:slug}', [BlogController::class, 'show']);

// Find Category Route

Route::get('/categories/{category:id}', [CatogeryController::class, 'index']);

// Username Route

Route::get('/users/{user:username}', [UserController::class, 'index']);

// Regigster Route
Route::get('/register/create', [RegisterController::class, 'create']);
Route::post('/register/create', [RegisterController::class, 'store']);

// Logout ROute
Route::post('/logout', [LogoutController::class, 'destory']);

Route::get("/login/create",[LoginController::class , "loginIndex"])->name("login.create");
Route::post("/login/store",[LoginController::class , "login"])->name("login.store");


Route::get('/homepages/index', [HomepageController::class, 'index'])->name('homepages.index');

Route::get('/profiles/index', [ProfilesController::class, 'index'])->name('profiles.index');

Route::get('/posts/index', [PostsController::class, 'index'])->name('posts.index');