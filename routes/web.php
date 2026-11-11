<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hello;
use App\Http\Controllers\Etudiants;
use App\Http\Controllers\Index;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;

Route::get('/', [Index::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/hello', [Hello::class, 'hello'])->name('hello');
Route::post('/createEtudiant', [Etudiants::class, 'createEtudiant'])->name('createEtudiant');
Route::post('/updateEtudiant', [Etudiants::class, 'updateEtudiant'])->name('updateEtudiant');
Route::post('/deleteEtudiant', [Etudiants::class, 'deleteEtudiant'])->name('deleteEtudiant');
Route::get('/afficherEtudiant', [Etudiants::class, 'afficherEtudiant'])->name('afficherEtudiant');
Route::get('/etudiant', [Etudiants::class, 'etudiant'])->name('etudiant');
Route::get('/editEtudiant', [Etudiants::class, 'editEtudiant'])->name('editEtudiant');
Route::get('/student', [StudentController::class, 'index'])->name('students.index');
Route::resource('/students', StudentController::class);

Route::get('/professors', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professors.index');
Route::get('/professors/create', [App\Http\Controllers\ProfessorController::class, 'create'])->name('professors.create');
Route::post('/professors', [App\Http\Controllers\ProfessorController::class, 'store'])->name('professors.store');
Route::get('/professors/{professor}', [App\Http\Controllers\ProfessorController::class, 'show'])->name('professors.show');
Route::get('/professors/{professor}/edit', [App\Http\Controllers\ProfessorController::class, 'edit'])->name('professors.edit');
Route::put('/professors/{professor}', [App\Http\Controllers\ProfessorController::class, 'update'])->name('professors.update');
Route::delete('/professors/{professor}', [App\Http\Controllers\ProfessorController::class, 'destroy'])->name('professors.destroy');
Route::resource('/professors', ProfessorController::class)
    ->parameters(['professors' => 'professor']);

require __DIR__.'/settings.php';