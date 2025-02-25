<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
Route::get('/list-employee', [EmployeeController::class, 'index']);
Route::post('/create-employee', [EmployeeController::class, 'store']);
Route::post('/employee/{id}', [EmployeeController::class, 'update']);
Route::get('/employee/detail/{id}', [EmployeeController::class, 'getEmployee']);
Route::delete('/delete/{id}', [EmployeeController::class, 'delete']);