<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //Add
use App\Http\Controllers\SeniorController; //Add

//シニア：ダッシュボード表示(books.blade.php)
Route::get('/', [SeniorController::class,'index'])->middleware(['auth'])->name('senior_index');
Route::get('/dashboard', [SeniorController::class,'index'])->middleware(['auth'])->name('dashboard');

//シニア：追加 
Route::post('/seniors',[SeniorController::class,"store"])->name('senior_store');

//シニア：削除 
Route::delete('/senior/{senior}', [SeniorController::class,"destroy"])->name('senior_destroy');

//シニア：更新画面
Route::post('/seniorsedit/{senior}',[SeniorController::class,"edit"])->name('senior_edit'); //通常
Route::get('/seniorsedit/{senior}', [SeniorController::class,"edit"])->name('edit');      //Validationエラーありの場合

//シニア：更新画面
Route::post('/seniors/update',[SeniorController::class,"update"])->name('senior_update');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

