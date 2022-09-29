<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie; //Se indica que usaremos nuestro modelo.


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/movies', [MovieController::class, 'all']); //Aqui llamamos a nuestra funcion mediante un controlador.
Route::get('/movies/{id}', [MovieController::class, 'findById']);
Route::post('/movies' , [MovieController::class, 'newMovie']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
