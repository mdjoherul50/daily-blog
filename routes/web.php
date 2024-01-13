<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomeAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::get('/register', [CustomeAuthController::class, 'register'])->name('auth.register');
Route::get('/login', [CustomeAuthController::class, 'login'])->name('login');

Route::post('/register', [CustomeAuthController::class, 'store'])->name('auth.store');
Route::post('/login', [CustomeAuthController::class, 'authentication'])->name('auth.authentication');
Route::get('/logout', [CustomeAuthController::class, 'logout'])->name('logout');

Route::resource('/categories', CategoryController::class);

Route::resource('/posts', PostController::class);

Route::get('/posts/category/{category_id}', [PostController::class, 'categoryPosts']);

// Route::group(['controller' => PostController::class, 'prefix' => 'posts','as' => 'posts.'], function(){
//     Route::get('/', 'index')->name('index');
//     Route::get('/create', 'create')->name('create');
// });