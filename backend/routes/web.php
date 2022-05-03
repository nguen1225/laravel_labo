<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitalController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::group(['prefix' => '/vital'], static function (): void {
//    Route::get('/', [VitalController::class, 'index'])->middleware(['auth'])->name('vital.index');
//    Route::post('/', [VitalController::class, 'create'])->middleware(['auth'])->name('vital.create');
//});

Route::group(['prefix' => '/vital', 'middleware' => 'auth'], static function (): void {
    Route::controller(VitalController::class)->group(function () {
        Route::get('/', 'index')->name('vital.index');
        Route::post('/', 'store')->name('vital.create');
    });
});

require __DIR__.'/auth.php';
