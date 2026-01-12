<?php
use App\Models\Document;

Route::get('/test-document', function () {
    return Document::all();
});

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('eDocument.Dashboard');
=======
    return view('edocument.Dashboard');
>>>>>>> ee99d17b24f6be892c94436c0402d952aae3a23a
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
