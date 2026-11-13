<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\MushroomController;
use App\Models\Mushroom;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mushrooms',[MushroomController::class,'index'])->name('mushrooms.index');
Route::get('/mushrooms/{id}',[MushroomController::class,'info'])->name('mushrooms.info');
