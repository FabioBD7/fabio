<?php

use App\Http\Controllers\LivroController;
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

//acrecentados

Route::get('/livros', function ()
{
    echo "não existem livros ainda testando eclipse ";
});

Route::get('/livrosctl', [LivroController::class,'index']);

route::get('/livrosid/{id}', [LivroController::class , 'show']);