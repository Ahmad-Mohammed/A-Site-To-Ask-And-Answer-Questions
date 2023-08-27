<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Models\question;

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

Route::apiResource('categories',CategoryController::class);
Route::get('category/{slug}/posts',[QuestionController::class,'categoryquestions']);
Route::get('auther/{id}/posts',[QuestionController::class,'autherquestions']);
Route::get('searchposts/{query}', [QuestionController::class,'searchposts']);
Route::apiResource('posts', QuestionController::class);
Route::post('login', [UserController::class,'login'])->name('login');
Route::post('register', [UserController::class,'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class,'details']);
    Route::post('comment/create', [AnswerController::class,'store']);
    Route::post('addPost', [QuestionController::class,'addQuestion']);
    Route::post('comment/{id}/inform', [adminController::class,'informComm']);
    Route::post('updatePost/{id}', [QuestionController::class,'updateQuestion']);
    Route::post('deletePost/{id}', [QuestionController::class,'deleteQuestion']);
});
Route::group(['prefix' => '/admin', 'middleware' => 'auth:api'], function () {
    Route::get('posts', [adminController::class,'getQustion']);
    Route::post('post/{slug}/consent', [adminController::class,'consent']);
    Route::post('post/{slug}/rejeter', [adminController::class,'rejeterQ']);
    Route::post('post/{slug}/hidden', [adminController::class,'hidden']);
    Route::post('comment/{id}/rejeter', [adminController::class,'rejeterComm']);
    Route::post('comment/{id}/rejeter', [adminController::class,'rejeterComm']);
    Route::post('comment/{id}/ignor', [adminController::class,'ignorComm']);
});






