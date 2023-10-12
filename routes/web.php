<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::middleware('CheckUser')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/search', [UserController::class, 'index']);
    Route::get('/game', [GameController::class, 'index']);
    Route::post('/game-search', [GameController::class, 'index']);
    Route::get('/game/create', [GameController::class, 'create']);

});

Route::get('/login', [UserController::class, 'loginForm']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/checkuser', [UserController::class, 'checkUser']);
