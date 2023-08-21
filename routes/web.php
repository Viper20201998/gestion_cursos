<?php

use App\Http\Controllers\CursosController;
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

Route::get(
    '/',
    function () {
        return view('template');
    }
);

//se deriva de  controllers la clase con el metodo index o la funcio de la view
//->name("cursos") con este metodo agregamos nombre a la ruta es opciona o si nececita en controllers ->route('cursos')
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');



Route::get('/formulario', [CursosController::class, 'getForm']);

//creando una nueva ruta

//si hacemos un post, update, delete, etc nececitamos un token
Route::post('/registro', [CursosController::class, 'store'])->name('registrarCurso');


//update_at
//create_at => fecha de registro
