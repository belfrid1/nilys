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

Route::get('/domaines', [App\Http\Controllers\DomainesController::class, 'index'])->name('Domaines Lists');

Route::get('/domaines/show', function() {
    return 'Show Domaine';
});


Route::view('/domaines/add', 'back.domaines.add');

Route::get('/domaines/edit', function() {
    return view('back.domaines.edit');
});
