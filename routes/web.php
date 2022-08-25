<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPerjalananController;

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


//controller
Route::get('/dataperjalanan', [DataPerjalananController::class, 'index']);
Route::get('/dataperjalanan/create', [DataPerjalananController::class, 'create']);
Route::post('/dataperjalanan/store', [DataPerjalananController::class, 'store']);
Route::get('/dataperjalanan/{id}/edit', [DataPerjalananController::class, 'edit']);
Route::put('/dataperjalanan/{id}', [DataPerjalananController::class, 'update']);

