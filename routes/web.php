<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [TeamMemberController::class, 'index'])->name('home');
Route::get('/team-members/{teamMember}', [TeamMemberController::class, 'show'])->name('team-members.show');
Route::get('/players', [TeamMemberController::class, 'players'])->name('players.index');

// Admin routes (protected by authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/team-members', [AdminController::class, 'teamMembers'])->name('team-members.index');
    
    Route::resource('team-members', TeamMemberController::class)->except(['index', 'show']);
});

// User profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
