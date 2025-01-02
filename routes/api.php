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


Route::get('/unauthenticated', function () {
    return response()->json(["message"=>"Unauthenticated"], 401);
});
Route::group(["middleware"=>['auth.not']], function () {
    Route::post('login', [AuthController::class, 'login']);
});
Route::group(["middleware"=>['auth:sanctum']], function()
{
    Route::group(["middleware"=>['user.type:citizen']], function()
    {
        Route::get('submission_approvals', [SubmissionApprovalController::class, "index"])->name("submission_approvals.index");
    });
    Route::group(["middleware"=>['user.type:officer']], function()
    {
        Route::get('submission_approvals/{id}', [SubmissionApprovalController::class, "show"])->name("submission_approvals.show");
    });
    Route::group(["middleware"=>["user.type:dukcapil"]], function()
    {
        Route::apiResource('officers', OfficerController::class);

        Route::apiResource('submissions', SubmissionController::class)
        ->parameters(["submissions"=>"id"]);
    });
    Route::group(["middleware"=>["user.type:citizen"]], function()
    {
        Route::post("submission_approvals", [SubmissionApprovalController::class, "store"])->name("submission_approvals.store");
    });

});
Route::get('coba', function() {
    $filename = 'ZXPfxg8VrF4cnyiD1g6SbW8PTG1lH7042XPvogGms7Ni1Vg2gu+6RHv2XnYorA2NnWkCWvT6CE9pnj5ZRUTAfin25WwRg7PRIkqq23WxOfk=.enc';
    $image = [
        'coba'=>route('coba', ['filename'=>$filename])
    ];
    return view('index', compact('image', 'image'));
});
Route::apiResource('documents', DocumentController::class);
Route::apiResource('citizens', CitizenController::class);
Route::get('display_image/{filename}', [DocumentController::class, 'displayImage'])->name('coba');


