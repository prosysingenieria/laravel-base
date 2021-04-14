<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Publico\{
    BaseProyecto,
};

use App\Http\Controllers\Admin\{
    DashboardController,
};

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


Route::get('/', [BaseProyecto::class, 'index'])->name('explicacion-proyecto');

//Rutas publicas, que no requieren iniciar sesión
Route::group(['prefix' => 'publico', 'as' => 'publico.'], function () {

});

//Usuarios que han iniciado sesión pero que no cuentan con acceso de administrador, ya sea usuarios/suscriptores/etc
Route::group(['prefix' => 'usuarios', 'as' => 'usuarios.'], function () {

});

//Rutas de administración, para ingresar al panel de control
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});



//Ruta 404
Route::fallback(function() {
    return view('errors.404');
});
