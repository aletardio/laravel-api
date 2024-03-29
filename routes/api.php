<?php

use App\Http\Controllers\Api\LeadController as LeadController;
use App\Http\Controllers\Api\ProjectController as ProjectController;
use App\Http\Controllers\Api\TypeController as TypeController;
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

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);
Route::get('/projects/type/{slug}', [ProjectController::class, 'get_type_projects']);

Route::get('/types', [TypeController::class, 'index']);

Route::post('/contacts', [LeadController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
