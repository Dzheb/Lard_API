<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContractorController;
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

//get one contractor
Route::get(
    '/contractor/{id}',
    [ContractorController::class, 'show']
)->name('contractor-one');

//delete contractor
Route::delete(
    '/contractor/{id}',
    [ContractorController::class, 'destroy']
)->name('contractor-delete');

//save contractor
Route::put(
    '/contractor/{id}',
    [ContractorController::class, 'update']
)->name('contractor-update');
//  get all contractors
Route::get('/contractor', [ContractorController::class, 'list'])->name('contractors');

// save one contractor to DB
Route::post('/contractor', [ContractorController::class, 'store'])->name('contractor-store');

