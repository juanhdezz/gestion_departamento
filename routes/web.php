<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('professors', ProfessorController::class.'@getProfessors')->name('professors');
Route::get('/professors/search', [ProfessorController::class, 'searchProfessors'])->name('searchProfessors');


Route::get('/settings',function(){
    return "Vista de opciones";
})->name('settings');
Route::get('/courses',function(){
    return "Vista de cursos";
})->name('courses');
Route::get('/students',function(){
    return "Vista de estudiantes";
})->name('students');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Ruta protegida del dashboard del usuario autenticado con middleware de autenticación 
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

use App\Http\Middleware\EnsureUserIsAuthenticated;

// Registrar middleware directamente en las rutas
Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


use App\Http\Controllers\TraineeController;
Route::get('/trainees', [TraineeController::class, 'index'])->name('trainees.index');
Route::get('trainees/searchTrainees', [TraineeController::class, 'searchTrainees'])->name('searchTrainees');
// Route::get('/trainees/create', [TraineeController::class, 'create'])->name('trainees.create');
// Route::post('/trainees', [TraineeController::class, 'store'])->name('trainees.store');
// Route::get('/trainees/{trainee}', [TraineeController::class, 'show'])->name('trainees.show');
// Route::get('/trainees/{trainee}/edit', [TraineeController::class, 'edit'])->name('trainees.edit');

