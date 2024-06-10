<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/vitaly', function () {
    return view('vitaly');
});

Route::get('/vitaly_test', fn () =>
view('vitaly_test', [
    'name' => '山田',
    'course' => 'ウォーキングイベント'
]));

Route::get('/vitaly_profile', fn () =>  view('vitaly_profile'));



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
