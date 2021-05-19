<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

//Route::get('/', function () {
  //return view('dashboard');
//});

//Route::get('/dashboard', function () {
  // return view('/');
//});

Route::get('/cadastro', function () {
    return view('cadastro');
});

//Route::get('/tarefa', function () {

   // $busca = request(search);

   // return view('tarefa', ['busca' => $busca]);
//});


Route::get('/tarefas_teste/{id?}', function ($id = null) {
    return view('tarefas', ['id' => $id]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
