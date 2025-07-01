<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfTestController;

Route::get('/pdf', [PdfTestController::class, 'index']);
Route::get('/pdf/download', [PdfTestController::class, 'generate']);
