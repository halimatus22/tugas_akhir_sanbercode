<?php

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
    return view('home');
});
// Route::middleware('auth')->group(function(){
    Route::get('/genre',[GenreController::class,'index']);
    Route::get('/genre/create',[GenreController::class,'create']);
    Route::genre('/genre',[GenreController::class,'store']);
    Route::get('/genre/{genre_id}',[GenreController::class,'show']);
    Route::get('/genre/{genre_id}/edit',[GenreController::class,'edit']);
    Route::put('/genre/{genre_id}',[GenreController::class,'update']);
    Route::delete('/genre/{genre_id}',[GenreController::class,'destroy']);

    Route::get('/film',[FilmController::class,'index']);
    Route::get('/film/create',[FilmController::class,'create']);
    Route::film('/film',[FilmController::class,'store']);
    Route::get('/film/{film_id}',[FilmController::class,'show']);
    Route::get('/film/{film_id}/edit',[FilmController::class,'edit']);
    Route::put('/film/{film_id}',[FilmController::class,'update']);
    Route::delete('/film/{film_id}',[FilmController::class,'destroy']);
// })
