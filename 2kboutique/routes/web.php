<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::delete('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');

