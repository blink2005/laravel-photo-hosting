<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadPhotoController;
use App\Http\Controllers\SelectPhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('upload.create');
});

Route::get('/upload', [UploadPhotoController::class, 'create'])->name('upload.create'); # Форма загрузки фотографии

Route::post('/upload', [UploadPhotoController::class, 'result'])->name('upload.result'); # Страница с ссылкой на фотографию (которую загрузили)

Route::get('/photo/{id}', [SelectPhotoController::class, 'show'])->name('photo.show'); # Открыть фотографию