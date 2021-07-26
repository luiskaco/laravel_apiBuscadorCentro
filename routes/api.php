<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;


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


Route::post('zone',[PrincipalController::class, 'zone']);

// Route::get('/district/{id}', 'PrincipalController@district');

Route::get('district/{id}', [PrincipalController::class, 'district']);

Route::get('description/{id}',[PrincipalController::class, 'description']);
