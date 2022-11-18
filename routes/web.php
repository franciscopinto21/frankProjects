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

Route::get('/', [\App\Http\Controllers\MainController::class, 'mainview']); 
Route::get('/second', [\App\Http\Controllers\SecondController::class, 'secondview']); 
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TestController::class, 'teste'])->name('teste');

Route::prefix('/app')->group(function(){
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'adminview']); 
});

Route::fallback(function() {
    echo "Rota inválida";
});