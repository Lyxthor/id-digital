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

    Route::get('addMasterPendudukPage',[AdminController::class, 'addMasterPendudukPage'])->name('addMasterPendudukPage');
    Route::get('masterPendudukPage',[AdminController::class, 'masterPendudukPage'])->name('masterPendudukPage');
    Route::get('editMasterPendudukPage',[AdminController::class,'editMasterPendudukPage'])->name('editMasterPendudukPage');

    Route::get('showSubmissionPage', [SubmissionController::class, 'showSubmissionPage'])->name('showSubmissionPage');
    Route::get('showDokumenPage',[DocumentController::class, 'showDokumenPage'])->name('showDokumenPage');


    Route::get('/', [AuthController::class, 'showScanFace'])->name('showScanFace');
    Route::get('Email',[AuthController::class, 'showVerifikasiEmail'])->name(('showVerifikasiEmail'));
    Route::get('Request',[AuthController::class, 'showRequestData'])->name(('showRequestData'));;
    Route::get('Dokumen',[AuthController::class, 'showLihatDokumen'])->name(('showLihatDokumen'));
    Route::get('Updatedata',[AuthController::class, 'showUpdatedata'])->name(('showUpdatedata'));





// Route::group(["middleware"=>['auth:sanctum', 'user_type_auth:officer']], function() {
    Route::get('submission_approvals', [SubmissionApprovalController::class, 'index']);
    Route::get('submission_approvals/{id}', [SubmissionApprovalController::class, 'show']);
    Route::post('submission_approvals', [SubmissionApprovalController::class, 'store']);
    Route::put('submission_approvals/{id}', [SubmissionApprovalController::class, 'update']);
    Route::delete('submission_approvals/{id}', [SubmissionApprovalController::class, 'destroy']);
// });

Route::resource('officers', OfficerController::class);
Route::resource('documents', DocumentController::class);
Route::resource('citizens', CitizenController::class);
Route::resource('submissions', SubmissionController::class);
