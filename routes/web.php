<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Ruta de inicio, redirige a la lista de proyectos
Route::get('/', function () {
    return redirect()->route('projects.index');
});

// Rutas del CRUD para Project con middleware 'role:admin'
Route::middleware('role:admin')->group(function () {
    Route::resource('projects', ProjectController::class);
});

// Rutas específicas para 'student' con middleware 'role:student'
Route::middleware('role:student')->group(function () {
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
});

// Rutas del dashboard con autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
