<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/approval', function () {
    return view('ApprovalPage');
});

Route::get('/approved-view', function () {
    return view('ApprovedDocumentView');
});

Route::get('/lanjutan', function () {
    return view('Lanjutan');
});
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);
