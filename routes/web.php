<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,PetController, PetOwnerController, LoginController};
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
})->name('hero');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('autheticate');
Route::get('/logoff', [LoginController::class, 'logoff'])->name('logoff');

Route::prefix('pet')->group(function(){
    Route::get('/',[PetController::class, 'index'])->name('pet.index');
    Route::get('/cadastro',[PetController::class,'register'])->name('pet.register');
    Route::post('/cadastro',[PetController::class,'store']);
});

Route::prefix('owner')->group(function (){
    Route::get('/lista',[PetOwnerController::class, 'index'])->name('owner.index');
    Route::get('/cadastroPet',[PetOwnerController::class,'petRegister'])->name('owner.PetRegister');
    Route::post('/cadastroPet',[PetOwnerController::class,'petStore'])->name('owner.PetStore');
    Route::get('/cadastro',[PetOwnerController::class,'register'])->name('owner.register');
    Route::post('/cadastro',[PetOwnerController::class,'store']);
    Route::get('/editPet/{id}',[PetOwnerController::class,'petEdit'])->name('owner.petEdit');
    Route::post('/editPet/{id}',[PetOwnerController::class,'petUpdate'])->name('owner.PetUpdate');
    Route::post('/cadastro',[PetOwnerController::class,'store']);
    Route::delete('/delete/{id}',[PetOwnerController::class,'petDelete'])->name('owner.PetDelete');
});



//Route::get('/pet/show/{id}',[PetController::class, 'show'])->name('pet.show');
Route::get('/editar/{id}',[UserController::class, 'edit'])->name('user.edit');
Route::post('/editar/{id}',[UserController::class, 'update'])->name('user.update');
Route::get('/cadastro',[UserController::class, 'register'])->name('user.register');
Route::post('/cadastro',[UserController::class, 'store'])->name('user.store');


