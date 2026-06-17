<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\MachineController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('machines')->group(function () {
    Route::get('/', [MachineController::class, 'index'])->name('machines.index');
    Route::get('/create', [MachineController::class, 'create'])->name('machines.create');
    Route::post('/', [MachineController::class, 'store'])->name('machines.store');
    Route::get('/{machine}', [MachineController::class, 'show'])->name('machines.show');
    Route::get('/{machine}/edit', [MachineController::class, 'edit'])->name('machines.edit');
    Route::put('/{machine}', [MachineController::class, 'update'])->name('machines.update');
    Route::delete('/{machine}', [MachineController::class, 'destroy'])->name('machines.destroy');
});

