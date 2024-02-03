<?php

use App\Http\Controllers\AuthController;
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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);

    //Route::post('/update-profile', [AuthController::class, 'updateProfile']);
    //Route::post('/update-avatar', [AuthController::class, 'updateAvatar']);
    //Route::post('/update-cover', [AuthController::class, 'updateCover']);
    //Route::post('/update-info', [AuthController::class, 'updateInfo']);
    //Route::post('/update-social', [AuthController::class, 'updateSocial']);
    //Route::post('/update-contact', [AuthController::class, 'updateContact']);
    //Route::post('/update-education', [AuthController::class, 'updateEducation']);
    //Route::post('/update-experience', [AuthController::class, 'updateExperience']);
    //Route::post('/update-skill', [AuthController::class, 'updateSkill']);
    //Route::post('/update-language', [AuthController::class, 'updateLanguage']);

});

