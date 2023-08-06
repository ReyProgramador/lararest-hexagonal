<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\GetProjectController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// route::get('project/{id}',[GetProjectController::class,'project']);

// route::get('project/{id}','GetProjectController');

route::get('project/{id}', \App\Http\Controllers\GetProjectController::class);

// route::get('project',[GetProjectController::class,'project'])->name('project');

// Route::get('user/{id}', 'GetProjectController');
// Route::post('user', 'CreateUserController');
// Route::put('user/{id}', 'UpdateUserController');
// Route::delete('user/{id}', 'DeleteUserController');

