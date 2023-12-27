<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\userController;
use App\Models\Seguimiento;
use App\Http\Controllers\Seguridad;
use App\Http\Controllers\Seguridad\AsignarController;

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
    Route::get('/permisos',[Seguridad\PermisosController::class, 'index'])->name('permisos.index');

    Route::get('/roles',[Seguridad\RolesController::class, 'index'])->name('roles.index');
});

Route::resource('casos', CasoController::class);
Route::resource('seguimiento', SeguimientoController::class);
Route::resource('usuarios', userController::class);
Route::resource('asignarRol',AsignarController::class)->names('asignarRol');

require __DIR__.'/auth.php';
