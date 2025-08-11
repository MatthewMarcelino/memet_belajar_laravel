<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);   
Route::get('/mahasiswa/create', [mahasiswaController::class, 'create']);
Route::post('/mahasiswa', [mahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [mahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [mahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [mahasiswaController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
