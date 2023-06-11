<?php

use App\Http\Controllers\ApiReserveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum', 'verified']) -> get('/reserves/{id}', function ($id, Request $request) {

    if ($request->user()->tokenCan('read')) {

        $ReserveController = new ApiReserveController();
        $Reserve = App\Models\Reserve::find($id);
        return $ReserveController->show($Reserve);

    } else {

        return response()->json('The token does not have permissions');

    }

});

Route::middleware(['auth:sanctum', 'verified']) -> get('/reserves', function (Request $request) {

    $ReserveController = new ApiReserveController();
    return $ReserveController->store($request);

});

Route::middleware(['auth:sanctum', 'verified']) -> get('/reserves/{id}', function ($id, Request $request) {

    $ReserveController = new ApiReserveController();
    return $ReserveController->update($request, $id);

});


Route::middleware(['auth:sanctum', 'verified'])->get('/reserves', [ApiReserveController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/reserves/email/{email}', [ApiReserveController::class, 'show']);
Route::middleware(['auth:sanctum', 'verified'])->post('/reserves', [ApiReserveController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->put('/reserves/{id}', [ApiReserveController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/reserves/{reserve}', [ApiReserveController::class, 'destroy']);