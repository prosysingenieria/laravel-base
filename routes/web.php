<?php

use App\Http\Controllers\Admin\DashboardController;
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

//Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

//'middleware' => 'auth'
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});


Route::get('/', [App\Http\Controllers\BaseProyecto::class, 'index'])->name('explicacion-proyecto');

//Ruta 404
Route::fallback(function() {
    return view('errors.404');
});
