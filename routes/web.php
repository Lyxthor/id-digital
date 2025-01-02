<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::get('/unauthenticated', function () {
//     return response()->json(["message"=>"Unauthenticated"], 401);
// });

// Route::group(["middleware"=>['not_auth']], function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('login', [AuthController::class, 'login']);
// });

    Route::get('dashboard', [AdminController::class, 'dashboardPage'])->name('dashboardPage');
    Route::get('submissionPage', [AdminController::class, 'submissionPage'])->name('submissionPage');
    Route::get('addSubmissionPage', [AdminController::class, 'addSubmissionPage'])->name('addSubmissionPage');

// Route::group(["middleware"=>['auth:sanctum', 'user_type_auth:officer']], function() {
    Route::get('submission_approvals', [SubmissionApprovalController::class, 'index']);
    Route::get('submission_approvals/{id}', [SubmissionApprovalController::class, 'show']);
    Route::post('submission_approvals', [SubmissionApprovalController::class, 'store']);
    Route::put('submission_approvals/{id}', [SubmissionApprovalController::class, 'update']);
    Route::delete('submission_approvals/{id}', [SubmissionApprovalController::class, 'destroy']);
// });

Route::get('officers', [OfficerController::class, 'index']);
Route::get('officers/{officer}', [OfficerController::class, 'show']);
Route::post('officers', [OfficerController::class, 'store']);
Route::put('officers/{officer}', [OfficerController::class, 'update']);
Route::delete('officers/{officer}', [OfficerController::class, 'destroy']);

Route::get('documents', [DocumentController::class, 'index']);
Route::get('documents/{document}', [DocumentController::class, 'show']);
Route::post('documents', [DocumentController::class, 'store']);
Route::put('documents/{document}', [DocumentController::class, 'update']);
Route::delete('documents/{document}', [DocumentController::class, 'destroy']);

Route::get('citizens', [CitizenController::class, 'index']);
Route::get('citizens/{citizen}', [CitizenController::class, 'show']);
Route::post('citizens', [CitizenController::class, 'store']);
Route::put('citizens/{citizen}', [CitizenController::class, 'update']);
Route::delete('citizens/{citizen}', [CitizenController::class, 'destroy']);

Route::get('submissions', [SubmissionController::class, 'index']);
Route::get('submissions/{id}', [SubmissionController::class, 'show']);
Route::post('submissions', [SubmissionController::class, 'store']);
Route::put('submissions/{id}', [SubmissionController::class, 'update']);
Route::delete('submissions/{id}', [SubmissionController::class, 'destroy']);
