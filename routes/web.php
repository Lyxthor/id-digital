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
use App\Http\Controllers\Citizen\SubmissionApprovalController as ApprovalCitizenController;
use App\Http\Controllers\Officer\SubmissionController as SubmissionOfficerController;
use App\Http\Controllers\Citizen\DocumentController as DocumentCitizenController;
use App\Http\Controllers\Officer\AuthController as AuthOfficerController;
use App\Http\Controllers\Officer\SubmissionApprovalController as ApprovalOfficerController;
use App\Http\Controllers\Dukcapil\DocumentController as DocumentDukcapilController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::get('/unauthenticated', function () {
//     return response()->json(["message"=>"Unauthenticated"], 401);
// });

// Route::group(["middleware"=>['not_auth']], function () {
Route::group(["middleware"=>["guest"]], function() {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('login', [AuthController::class, 'login']);
});
Route::group(["middleware"=>["auth"]], function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('display_image/{filename}', [DocumentController::class, 'displayImage'])->name('document.display');
    // AUTHENTICATED OFFICER ROUTES
    Route::group([], function() {
        Route::get('officer/privilege', [AuthOfficerController::class, 'index'])->name('officer.privileges.index');
        Route::post('officer/privilege', [AuthOfficerController::class, 'store'])->name('officer.privileges.store');
        Route::get('officer/submission_approvals/{id}', [ApprovalOfficerController::class, 'show'])->name('officer.submission_approvals.show');
        Route::resource("officer/submissions", SubmissionOfficerController::class)
        ->names([
            "index"=>"officer.submissions.index",
            "show"=>"officer.submissions.show",
            "edit"=>"officer.submissions.edit",
            "create"=>"officer.submissions.create",
            "store"=>"officer.submissions.store",
            "update"=>"officer.submissions.update",
            "destroy"=>"officer.submissions.destroy",
        ])
        ->parameters([
            "submissions"=>"id"
        ]);
    });
    // AUTHENTICATED CITIZEN ROUTES
    Route::group(["middleware"=>["user.type:citizen"]], function() {
        Route::resource("citizen/submissions", ApprovalCitizenController::class)
        ->only(["index", "show", "store"])
        ->names([
            "index"=>"citizen.submissions.index",
            "show"=>"citizen.submissions.show",
            "store"=>"citizen.submissions.store"
        ])
        ->parameters([
            "submissions"=>"id"
        ]);
        Route::resource("citizen/documents", DocumentCitizenController::class)
        ->only(["index", "show"])
        ->names([
            "index"=>"citizen.documents.index",
            "show"=>"citizen.documents.show"
        ])
        ->parameters([
            "documents"=>"id"
        ]);
    });

    Route::group(["middleware"=>["user.type:dukcapil"]], function() {
        Route::resource("dukcapil/documents", DocumentDukcapilController::class)
        ->names([
            "index"=>"dukcapil.documents.index",
            "show"=>"dukcapil.documents.show",
            "edit"=>"dukcapil.documents.edit",
            "create"=>"dukcapil.documents.create",
            "store"=>"dukcapil.documents.store",
            "update"=>"dukcapil.documents.update",
            "destroy"=>"dukcapil.documents.destroy",
        ])->parameters([
            "documents"=>"id"
        ]);
    });
});

// });

    Route::get('dashboard', [AdminController::class, 'dashboardPage'])->name('dashboardPage');
    Route::get('submissionPage', [AdminController::class, 'submissionPage'])->name('submissionPage');
    Route::get('addSubmissionPage', [AdminController::class, 'addSubmissionPage'])->name('addSubmissionPage');

    Route::get('addMasterPendudukPage',[AdminController::class, 'addMasterPendudukPage'])->name('addMasterPendudukPage');
    Route::get('masterPendudukPage',[AdminController::class, 'masterPendudukPage'])->name('masterPendudukPage');
    Route::get('editMasterPendudukPage',[AdminController::class,'editMasterPendudukPage'])->name('editMasterPendudukPage');

    Route::get('showSubmissionPage', [SubmissionController::class, 'showSubmissionPage'])->name('showSubmissionPage');
    Route::get('showDokumenPage',[DocumentController::class, 'showDokumenPage'])->name('showDokumenPage');
    Route::get('showSubmissionOfficer',[OfficerController::class, 'showSubmissionOfficer'])->name('showSubmissionOfficer');
    Route::get('showSubmissionOfficerDetail',[OfficerController::class, 'showSubmissionOfficerDetail'])->name('showSubmissionOfficerDetail');


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


