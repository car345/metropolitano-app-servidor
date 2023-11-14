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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-csrf-token', [App\Http\Controllers\PacienteController::class, 'getCsrfToken']);


Route::get('/api/pacientes',[App\Http\Controllers\PacienteController::class, 'listarPacientes']);


//doctores//
Route::get('/doctor/buscarespecialidad',[App\Http\Controllers\DoctorController::class, 'buscarespecialidad']);
Route::get('/doctor/buscardoctor',[App\Http\Controllers\DoctorController::class, 'listardoctores']);
Route::get('/doctor/buscarhorarios',[App\Http\Controllers\DoctorController::class, 'buscarhorarios']);
Route::post('/doctor/agregardoctor',[App\Http\Controllers\DoctorController::class, 'agregardoctor']);
Route::post('/doctor/agregarhorario_doctor',[App\Http\Controllers\DoctorController::class, 'agregarhorario_doctor']);
Route::post('/doctor/eliminardoctor/{id}', [App\Http\Controllers\DoctorController::class, 'eliminardoctor']);
Route::post('/doctor/actualizardoctor/{id}', [App\Http\Controllers\DoctorController::class, 'actualizardoctor']);
Route::post('/doctor/agregarhorario', [App\Http\Controllers\DoctorController::class, 'agregarhorario']);
Route::post('/doctor/actualizarhorario/{id}', [App\Http\Controllers\DoctorController::class, 'actualizarhorario']);
Route::delete('/doctor/eliminarhorario/{id}', [App\Http\Controllers\DoctorController::class, 'eliminarhorario']);

Route::middleware(['web'])->group(function () {
Route::post('/api/pacientes/agregarpaciente', [App\Http\Controllers\PacienteController::class,'agregarpaciente']);
Route::delete('/api/pacientes/eliminar/{id}', [App\Http\Controllers\PacienteController::class, 'eliminar']);
Route::post('/api/pacientes/editarpaciente/{id}', [App\Http\Controllers\PacienteController::class, 'update']);

Route::post('/api/user/', [App\Http\Controllers\Loginauth::class, 'validateuser']);

});