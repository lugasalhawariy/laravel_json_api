<?php

use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;

use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\UserController;

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

// mengambil semua data user beserta relasinya


// Route::get('/users', [UserController::class, 'all']);
// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/posts', [PostController::class, 'all']);
// Route::get('/post/{id}', [PostController::class, 'show']);

// Route::get('/tags', [TagController::class, 'all']);
// Route::get('/tag/{id}', [TagController::class, 'show']);

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(function ($server) {
        $server->resource('posts', PostController::class)
        ->relationships(function ($relationships) {
            $relationships->hasMany('user');
        });

        $server->resource('users', UserController::class);
    });