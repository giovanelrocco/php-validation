<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cliente', [ClienteController::class, 'listar'])->name('cliente.listar');
    Route::get('/cliente/cadastrar', [ClienteController::class, 'cadastrar'])->name('cliente.cadastrar');
    Route::post('/cliente', [ClienteController::class, 'criar'])->name('cliente.criar');
    Route::get('/cliente/{id}', [ClienteController::class, 'editar'])->name('cliente.editar');
    Route::put('/cliente/{id}', [ClienteController::class, 'atualizar'])->name('cliente.atualizar');
    Route::delete('/cliente/{id}', [ClienteController::class, 'deletar'])->name('cliente.deletar');

    Route::get('/admin', [AdminController::class, 'listar'])->name('admin.listar');
    Route::get('/admin/cadastrar', [AdminController::class, 'cadastrar'])->name('admin.cadastrar');
    Route::post('/admin', [AdminController::class, 'criar'])->name('admin.criar');
    Route::get('/admin/{id}', [AdminController::class, 'editar'])->name('admin.editar');
    Route::put('/admin/{id}', [AdminController::class, 'atualizar'])->name('admin.atualizar');
    Route::delete('/admin/{id}', [AdminController::class, 'deletar'])->name('admin.deletar');

});

require __DIR__ . '/auth.php';
