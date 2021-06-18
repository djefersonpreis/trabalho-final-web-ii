<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoGrupoController;

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

Route::get('/grupos',                   [TodoGrupoController::class, 'listagem'])   ->name('grupos.listagem');
Route::get('/grupos/create',            [TodoGrupoController::class, 'create'])     ->name('grupos.create');
Route::get('/grupos/remove/{grupo_id}', [TodoGrupoController::class, 'remove'])     ->name('grupos.remove')->where('grupo_id', '[0-9]+');
Route::get('/grupos/edit/{grupo_id}',   [TodoGrupoController::class, 'edit'])       ->name('grupos.edit')  ->where('grupo_id', '[0-9]+');

Route::post('/grupos',                  [TodoGrupoController::class, 'store'])      ->name('grupos.store');
Route::post('/grupos/update/{grupo_id}',[TodoGrupoController::class, 'update'])     ->name('grupos.update')->where('grupo_id', '[0-9]+');
