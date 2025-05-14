<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});


//Laravel methods
Route::get('/test', [DemoController::class, 'test']);
Route::get('/demo', [DemoController::class, 'demo1']);
Route::post('/demo2', [DemoController::class, 'demo2']);
Route::patch('/demo2', [DemoController::class, 'demo2']);
Route::delete('/demo2', [DemoController::class, 'demo2']);
Route::put('/demo2', [DemoController::class, 'demo2']);
Route::get('/demo7', [DemoController::class, 'demo7']);
Route::get('/demo8/{name}/{age}', [DemoController::class, 'demo8']);
Route::post('/demo9', [DemoController::class, 'demo9']);
Route::post('/demo10', [DemoController::class, 'demo10']);
Route::post('/demo11', [DemoController::class, 'demo11']);
Route::post('/demo12', [DemoController::class, 'demo12']);
Route::post('/demo13', [DemoController::class, 'demo13']);
//FileController
Route::get('/download', [FileController::class, 'download']);
Route::get('/download/invoice/{invoiceId}', [FileController::class, 'downloadId']);
Route::get('/download/invoice/{invoiceId}/type/{FileType?}', [FileController::class, 'downloadIdWithFileType']);
Route::get('/download/invoice', [FileController::class, 'error']);
Route::get('/download/invoice/{invoiceId}',action: [FileController::class,'downloadId']);
Route::get('/download/invoice/{invoiceId}/type/{FileType?}',action: [FileController::class,'downloadIdWithFileType']);
Route::get('/download/invoice', action: [FileController::class, 'error']);

////
Route::get('/', [TemplateController::class, 'home'])->name('home');
Route::get('/about', [TemplateController::class, 'about'])->name('about');
Route::get('/shop', [TemplateController::class,'shop'])->name('shop');
Route::get('/contact', [TemplateController::class,'contact'])->name('contact');