<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;


Route::get('/', [FamilyController::class, 'index']);
Route::post('/fetch-data', [FamilyController::class, 'fetchData']);
Route::post('/search', [FamilyController::class, 'search'])->name('search');
Route::get('/search', [FamilyController::class, 'getSearch'])->name('getSearch');

