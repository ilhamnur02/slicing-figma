<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('eDocument.Dashboard');
});

Route::get('/approval', function () {
    return view('eDocument.ApprovalPage');
});

Route::get('/approved-view', function () {
    return view('eDocument.ApprovedDocumentView');
});

Route::get('/lanjutan', function () {
    return view('eDocument.Lanjutan');
});
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);
