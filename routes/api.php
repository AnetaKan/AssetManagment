<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Employee rute 
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::post('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

//Equipment rute
Route::get('/equipments', [EquipmentController::class, 'index']);
Route::get('/equipments/{id}', [EquipmentController::class, 'show']);
Route::post('/equipments', [EquipmentController::class, 'store']);
Route::post('/equipments/{id}', [EquipmentController::class, 'update']);
Route::delete('/equipments/{id}', [EquipmentController::class, 'destroy']);

//Keyboard routes
Route::get('/keyboards', [KeyboardController::class, 'index']);
Route::get('/keyboards/{id}', [KeyboardController::class, 'show']);
Route::post('/keyboards', [KeyboardController::class, 'store']);
Route::post('/keyboards/{id}', [KeyboardController::class, 'update']);
Route::delete('/keyboards/{id}', [KeyboardController::class, 'destroy']);

//Mouse rute
Route::get('/mouses', [MouseController::class, 'index']);
Route::get('/mouses/{id}', [MouseController::class, 'show']);
Route::post('/mouses', [MouseController::class, 'store']);
Route::post('/mouses/{id}', [MouseController::class, 'update']);
Route::delete('/mouses/{id}', [MouseController::class, 'destroy']);

//PC rute
Route::get('/pcs', [PcController::class, 'index']);
Route::get('/pcs/{id}', [PcController::class, 'show']);
Route::post('/pcs', [PcController::class, 'store']);
Route::post('/pcs/{id}', [PcController::class, 'update']);
Route::delete('/pcs/{id}', [PcController::class, 'destroy']);