<?php

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

Route::resource('officers', OfficerController::class)->except(['edit', 'create']);
Route::resource('documents', DocumentController::class)->except(['edit', 'create']);
Route::resource('citizens', CitizenController::class)->except(['edit', 'create']);
Route::resource('document-types', DocumentTypeController::class)->except(['edit', 'create']);
Route::resource('submissions', SubmissionController::class)->except(['edit', 'create']);
Route::resource('submission-approvals', SubmissionApprovalController::class)->except(['edit', 'create']);
