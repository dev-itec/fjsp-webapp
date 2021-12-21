<?php

use App\Http\Controllers\API\CommercesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Route
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
//Route::post('user/data', [Users::class,'data'])->name('api.user.data');

/* COMMERCES */
Route::post('commerce', [CommercesController::class, 'create'])->name('api.commerce.create');
Route::get('commerce', [CommercesController::class, 'read'])->name('api.commerce.read');
Route::put('commerce', [CommercesController::class, 'update'])->name('api.commerce.update');
Route::delete('commerce', [CommercesController::class, 'delete'])->name('api.commerce.delete');



