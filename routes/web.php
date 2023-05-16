<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarrerasCRUDController;
use App\Http\Controllers\AreasCRUDController;

use App\Http\Controllers\MensionCRUDController;
use App\Http\Controllers\MateriasCRUDController;
use App\Http\Controllers\HorarioCRUDController;
use App\Http\Controllers\SeccionCRUDController;

use App\Http\Controllers\PensumCRUDController;
use App\Http\Controllers\Reg_acedmCRUDController;
use App\Http\Controllers\TurnosCRUDController;



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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('carreras', CarreraController::class);
Route::resource('areas', AreaController::class);
Route::resource('mension', MensionController::class);
Route::resource('materias', MateriaController::class);
Route::resource('seccions', SeccionController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('pensum', PensumController::class);
Route::resource('reg-acedm', RegAcedmController::class);
Route::resource('turnos', TurnoController::class);



