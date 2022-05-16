<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApprovisionnemtController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {

    //Approu
    Route::get('/approvisionnement/index', [ApprovisionnemtController::class, 'index'])->name('approvisionnement.index');

    //Ventes
    Route::get('ventes/index',[VenteController::class, 'index'])->name('ventes.index');

    // Posts routes
    Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');
    Route::post('/posts/store', [PostsController::class, 'store'])->name('post.store');

    // Categories Routes
    Route::get('/categories/index', [CategoryController::class , 'index'])->name('categories.index');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
    Route::get('/categories/create', [CategoryController::class , 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
