<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProceduresController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppealFormController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/training/login', [LoginController::class, 'login'])->name('login');
Route::get('/training/login', function () {return view('login');})->name('login');

// Regular users
Route::get('/procedures', [ProceduresController::class, 'proceduresGuide'])->name('procedures-guide');
Route::get('/procedures-list/{observation}', [ProceduresController::class, 'listProcedures'])->name('procedures-list');
Route::get('/procedure-details/{procedure}', [ProceduresController::class, 'procedureDetails'])->name('procedure-details');
Route::post('/procedure-details/{procedure}', [ProceduresController::class, 'updateProcedureDetails']);
Route::put('/procedure-details/{procedure}', [ProceduresController::class, 'updateProcedureDetails'])->name('update-procedure-details');
   
// Admins
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/admin/create-user', [AdminUserController::class,'createUserForm'])->name('create-user');
    Route::post('/admin/create-user', [AdminUserController::class, 'createUser'])->name('create-user');

    Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('edit-user');
    Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('update-user');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('destroy-user');
});

Route::get('/appeal-form', [AppealFormController::class, 'index'])->name('appealForm');
Route::post('/appeal-form', [AppealFormController::class, 'store'])->name('appeal.form.store');