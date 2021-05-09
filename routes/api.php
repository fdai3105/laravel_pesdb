<?php

use App\Http\Controllers\API\PlayerController;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('player', PlayerController::class);

Route::get('demo', function () {
    $players = Player::all()->where('type', '=','Default');
    return $players;
});
