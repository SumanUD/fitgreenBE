<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::get('/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])
        ->name('contacts.index');
});


Auth::routes([
    'register' => false,
    'verify' => false,
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
