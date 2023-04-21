<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\IllnessController;
use  App\Http\Controllers\WardController;
use  App\Http\Controllers\DoctorController;
use App\Models\Illness;


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
    return view('user/index');
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

Route::resource('illnesses',IllnessController::class);

Route::resource('wards',WardController::class);

Route::resource('doctors',DoctorController::class);

Route::get('/admin',[Controller::class,'admin'])->name('admin');

// Route::post('/admin/storeIllness',[IllnessController::class,'store']);

// Route::post('/admin/updateIllness',[IllnessController::class,'update']);

// Route::delete('/admin/destroyIllness/{id}', [IllnessController::class, 'destroy' ])->name('illnesses.destroy');

// Route::post('/admin/storeWard',[WardController::class,'store']);

// Route::post('/admin/updateWard',[WardController::class,'update']);

// Route::delete('/admin/destroyWard/{id}', [WardController::class, 'destroy' ])->name('wards.destroy');
