<?php

use App\Http\Controllers\LodgeController;
use App\Models\Lodge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


//Route::get('/lodge/{id}', function($id){
//   return new \App\Http\Resources\Lodge(Lodge::findOrFail($id));
//});

Route::get('/lodgeTypes', [\App\Http\Controllers\LodgeTypeController::class, 'getAllTypes']);
Route::get('/all-lodges', [LodgeController::class, 'getAll']);

Route::get('/lodges/{lodge}/type', function(Lodge $lodge){
    return $lodge->lodgeType()->get();
});


Route::get('/lodges/{type}', [LodgeController::class, 'lodgesWithType']);

