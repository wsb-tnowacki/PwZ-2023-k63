<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontrolerStart;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('layout');
})->name('start'); */ 



/* Route::get('/kontakt', function () {
    return view('ogolny.kontakt');
})->name('kontakt'); */ 



/* Route::get('/onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('ogolny.onas',['zadania' => $zadania]);
})->name('onas');  */

/* Route::get('/', [KontrolerStart::class, 'lista'])->name('start');
Route::get('/kontakt', [KontrolerStart::class, 'kontakt'])->name('kontakt');
Route::get('/onas', [KontrolerStart::class, 'onas'])->name('onas'); */

Route::controller(KontrolerStart::class)->group(function(){
    Route::get('/','lista')->name('start');
    Route::get('/kontakt',  'kontakt')->name('kontakt');
    Route::get('/onas',  'onas')->name('onas');
    /* Route::get('/onas/{id}/info/{onas}', 'test')->name('test'); */
});
Route::resource('posty',PostController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
