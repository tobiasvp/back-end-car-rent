<?php

// use App\Http\Controllers\Api\V1\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ScheduleController;
use App\Http\Controllers\Api\V1\CarsController;
use App\Http\Controllers\Api\V1\DriverController;
use App\Http\Controllers\Api\V1\OfferController;

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

// Route::apiResource()



// Route::prefix(('V1'))->group(function(){
//     Route::apiResource('/schedules',ScheduleController::class);

// });


Route::prefix('v1')->group(function(){

    Route::apiResource('/schedules' , ScheduleController::class);
    Route::apiResource('/drivers' , DriverController::class);
    Route::apiResource('/offer' , OfferController::class);
    Route::apiResource('/cars' , CarsController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
