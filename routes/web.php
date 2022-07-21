<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,PetController, PetOwnerController};
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
    return view('hero');
});
Route::prefix('pet')->group(function(){
    Route::get('/index',[PetController::class, 'index'])->name('pet.index');
    Route::get('/cadastro',[PetOwnerController::class,'register'])->name('pet.register');
});
//Route::get('/pet/show/{id}',[PetController::class, 'show'])->name('pet.show');
Route::get('/cadastro',[UserController::class, 'register'])->name('user.register');
Route::post('/cadastro',[UserController::class, 'store'])->name('user.store');


