<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/login', 'authentification.login');

Route::view('/', 'welcome');

Route::view('dashboard', 'back.dashboard');

Route::get('/popup-group', function() {
    return 'Popup Group Lists';
});

Route::get('/popup', function() {
    return 'Popup Lists';
});

Route::get('/contact', function() {
    return 'Contact';
});

Route::get('/domaines', [App\Http\Controllers\DomaineController::class, 'index'])->name('domain_list');

Route::get('/domaines/add', [App\Http\Controllers\DomaineController::class, 'create'])->name('domain_create');

Route::get('/domaines/show', [App\Http\Controllers\DomaineController::class, 'show'])->name('domain_show');

Route::get('/domaines/edit', [App\Http\Controllers\DomaineController::class, 'edit'])->name('domain_edit');
