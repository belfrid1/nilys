<?php

use App\Http\Controllers\DomaineController;
use App\Http\Controllers\DomainController;
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
Route::get('/', function () {
    return redirect(\route('home'));
});
\Illuminate\Support\Facades\Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');





//Route::group(['prefix' => 'admin'], function () {
//
//    Route::group(['middleware' => ['auth']], function () {
//
//        Route::get('/', 'App\Http\Controllers\HomeController@index')->name('admin.index');
//
//    });
//});

//Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//Route::view('/login', 'authentification.login');

//Route::view('dashboard', 'back.dashboard');
//
//
//Route::view('domains/add', 'back.domains.add');
//
//Route::get('/popup-group', function() {
//    return 'Popup Group Lists';
//});
//
//Route::get('/popup', function() {
//    return 'Popup Lists';
//});
//
//Route::get('/contact', function() {
//    return 'Contact';
//});
//

 Route::resource('domain',DomainController::class);
// Route::get('/domains', [DomaineController::class, 'index'])->name('domain.list');
// Route::get('/domains/add', [DomaineController::class, 'create'])->name('domain.create');
// Route::post('/domains/store', [DomaineController::class, 'store'])->name('domain.store');
// Route::get('/domains/show', [DomaineController::class, 'show'])->name('domain.show');
// Route::get('/domains/edit', [DomaineController::class, 'edit'])->name('domain.edit');
 Route::post('/domain/update/{id}', [DomainController::class, 'update'])->name('domain.update');
 Route::get('/domain/delete/{id}', [DomainController::class, 'destroy'])->name('domain.delete');
//

