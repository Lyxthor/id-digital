<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('documents', DocumentController::class)->except(['edit', 'create']);
Route::resource('citizens', CitizenController::class)->except(['edit', 'create']);
Route::resource('document-types', DocumentTypeController::class)->except(['edit', 'create']);
