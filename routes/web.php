<?php

use App\Http\Controllers\ControladorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FabricarController;

Route::get('/', [HomeController::class,'index']);

Route::get('/fabricar', [FabricarController::class,'index']);
Route::get('/controlar', [ControladorController::class,'index']);

//Get
//Post
//Put
//Patch
//Delete
