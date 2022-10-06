<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\PopupGroupController;
use App\Http\Controllers\SettingsController;
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

Route::resource('domain', DomainController::class);
// Route::get('/domains', [DomaineController::class, 'index'])->name('domain.list');
// Route::get('/domains/add', [DomaineController::class, 'create'])->name('domain.create');
// Route::post('/domains/store', [DomaineController::class, 'store'])->name('domain.store');
// Route::get('/domains/show', [DomaineController::class, 'show'])->name('domain.show');
// Route::get('/domains/edit', [DomaineController::class, 'edit'])->name('domain.edit');
Route::post('/domain/update/{id}', [DomainController::class, 'update'])->name('domain.update');
Route::get('/domain/delete/{id}', [DomainController::class, 'destroy'])->name('domain.delete');

Route::post('/domain/update/{domain}', [DomainController::class, 'update'])->name('domain.update');
Route::get('/domain/delete/{domain}', [DomainController::class, 'destroy'])->name('domain.delete');
//

// Popup Group all route
Route::resource('groups', PopupGroupController::class);
Route::post('/groups/update/{slug}', [PopupGroupController::class, 'update'])->name('groups.update');
Route::get('/groups/delete/{slug}', [PopupGroupController::class, 'destroy'])->name('groups.delete');

// popup all route
Route::resource('popup', PopupController::class);
Route::post('/popup/update/{popup}', [PopupController::class, 'update'])->name('popup.update');
Route::get('/popup/delete/{popup}', [PopupController::class, 'destroy'])->name('popup.delete');






//api for contact
Route::middleware(['cors'])->group(function () {
    Route::get('api/contact/create', [App\Http\Controllers\Api\ContactController::class, "create"]);
    Route::get('api/script/popup-content', [App\Http\Controllers\Api\ScriptController::class, "getPopupContent"]);
    Route::get('api/test', [App\Http\Controllers\Api\ContactController::class, "test"]);

});
Route::resource('contact', ContactController::class);
Route::get('contact/sent-mail/{id}', [\App\Http\Controllers\Mail\MailController::class,'sendMail'])->name("contact.send_mail");




//all settings route

Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/settings/edit/setting_mail', [SettingsController::class, 'editSettingMail'])->name('edit.setting_mail');
Route::get('/settings/edit/setting_api', [SettingsController::class, 'editSettingApi'])->name('edit.setting_api');


/// conditions route
Route::get('/conditions/delete/{cdtion}', [PopupGroupController::class, 'destroyCdtion'])->name('delete.condition');




