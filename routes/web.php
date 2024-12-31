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

// Ruta protegida del dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
