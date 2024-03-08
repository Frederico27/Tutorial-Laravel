<?php

use App\Http\Controllers\IdentidadeController;
use App\Http\Controllers\ParImpar;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

//Route GET method dadus ID
Route::get('/submit', function (Request $request) {
    $id = $request->input('id');
    return "<h1> Estudante ho ID $id<h1>";
});

Route::post('/submit', function (Request $request) {
    $id = $request->input('id');
    return "<h1> Estudante ho ID $id<h1>";
});

Route::redirect('/redirect', '/');

Route::prefix('estudante')->group(function () {

    Route::get('/{id}', function ($id) {
        return "<h1>Estudante ho ID $id";
    })->where('id', '[0-9]+');

    Route::get('/{id}/{naran}', function ($id, $naran) {
        return "<h1>Estudante ho ID $id ho Naran $naran";
    });
});

Route::fallback(function () {
    return "404 Pajina la existe";
});

//Blade Controller

Route::view('/parimpar', 'home.parimpar');
Route::post('/parimpar', [ParImpar::class, 'check']);


//Aula Database

Route::get('/dashboard', [IdentidadeController::class, 'dadusDatabase'])->name('dashboard');
Route::get('users/{id}', [IdentidadeController::class, 'getDadus'])->name('editdadus');
