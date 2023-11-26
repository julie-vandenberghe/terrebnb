<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\HomeController;
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

//HOME
Route::get('/', [HomeController::class, 'index']);

//CRUD Accommodations
Route::get('/logements', [AccommodationController::class, 'index']);
Route::get('/logement/{id}-{slug}', [AccommodationController::class, 'show']);
Route::get('/logements/creer', [AccommodationController::class, 'create']); // pour afficher le formulaire
Route::post('/logements/creer', [AccommodationController::class, 'store']);
Route::get('/logement/{id}/modifier', [AccommodationController::class, 'edit']);
Route::post('/logement/{id}/modifier', [AccommodationController::class, 'update']);
Route::get('/logement/{id}/supprimer', [AccommodationController::class, 'destroy']);