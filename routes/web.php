<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', [MemberController::class, 'index'])->name('members.index');
Route::get('/create', [MemberController::class, 'create'])->name('members.create');
Route::post('/', [MemberController::class, 'store'])->name('members.store');
Route::get('/{id}', [MemberController::class, 'show'])->name('members.show');
Route::get('/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/{id}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/{id}', [MemberController::class, 'destroy'])->name('members.delete');