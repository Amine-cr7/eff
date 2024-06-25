<?php

use App\Http\Controllers\SalarieController;
use App\Http\Controllers\VoitureController;
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

Route::delete('/voitures/{voiture}',[VoitureController::class,'SupprimerVoiture'])->name('supprimer');

Route::get('/voitures',[VoitureController::class,'AfficherListeVoitures']);
Route::post('/voitures',[VoitureController::class,'AjouterVoiture']);
Route::get('/salaries',[SalarieController::class,'afficherListeSalaries']);
Route::get('/salaries/{salarie}',[SalarieController::class,'consulterDetails']);