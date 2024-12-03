<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [TaskController::class, 'index'])->name('home');
Route::post('/home/add', [TaskController::class, 'createTask'])->name('add_task');
Route::get('/home/delete/{id}', [TaskController::class, 'deleteTask'])->name('eliminar_tarea');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/add', [CategoryController::class, 'createCategory'])->name('add_category');
Route::get('/category/edit/{id}', [CategoryController::class, 'updateCategoryView'])->name('editar_categoria_view');
Route::post('/category/edit/{id}', [CategoryController::class, 'updateCategory'])->name('editar_categoria');
Route::get('/category/edit/{id}', [CategoryController::class, 'updateCategoryView'])->name('editar_categoria_view');
Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('eliminar_categoria');


require __DIR__.'/auth.php';
