<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\SubmissionApprovalController;
use App\Http\Controllers\SubmissionController;
use App\Models\SubmissionApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/unauthenticated', function () {
    return response()->json(["message"=>"Unauthenticated"], 401);
});
//Route::post('login', [AuthController::class, 'login']);
Route::group(["middleware"=>['not_auth']], function () {
    Route::post('login', [AuthController::class, 'login']);
});
Route::group(["middleware"=>['auth:sanctum', 'user_type_auth:officer']], function() {
    Route::apiResource('submission_approvals', SubmissionApprovalController::class)
    ->parameters(["submission_approvals"=>"id"]);
});
Route::apiResource('officers', OfficerController::class);
Route::apiResource('documents', DocumentController::class);
Route::apiResource('citizens', CitizenController::class);
Route::apiResource('submissions', SubmissionController::class)
->parameters(["submissions"=>"id"]);

