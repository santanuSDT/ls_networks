<?php

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

//API route for register new user
Route::post('/auth/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/auth/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    //Route for Create page
    Route::post('/page/create', [App\Http\Controllers\API\PageController::class, 'createPage']);

    //Route for Create person post
    Route::post('/person/attach-post', [App\Http\Controllers\API\PostController::class, 'createPersonPost']);

    //Route for Create page post
    Route::post('/page/attach-post', [App\Http\Controllers\API\PostController::class, 'createPagePost']);

    //Route for follow a person
    Route::post('/follow/person', [App\Http\Controllers\API\FollowController::class, 'followPerson']);

    //Route for follow a person
    Route::post('/follow/page', [App\Http\Controllers\API\FollowController::class, 'followPage']);

    //Route for person feed
    Route::get('/person/feed', [App\Http\Controllers\API\FeedController::class, 'index']);


    // API route for logout user
    Route::post('/auth/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
