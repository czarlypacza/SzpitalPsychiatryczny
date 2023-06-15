<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\IllnessController;
use  App\Http\Controllers\WardController;
use  App\Http\Controllers\DoctorController;
use App\Http\Controllers\AddressController;
use App\Models\Illness;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportController;

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
    return view('admin/admin');
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

Route::resource('address',AddressController::class);

Route::resource('patients',PatientController::class)->except('show');


Route::get('/filterPatients', [PatientController::class,'filterPatients'])->name('filterPatients');

Route::get('/filterWards', [WardController::class,'filterWards'])->name('filterWards');

Route::get('/filterDoctors', [DoctorController::class,'filterDoctors'])->name('filterDoctors');

Route::get('/filterIllnesses', [IllnessController::class,'filterIllnesses'])->name('filterIllnesses');

Route::get('/filterAddresses', [AddressController::class,'filterAddresses'])->name('filterAddresses');

Route::get('/admin',[Controller::class,'admin'])->name('admin');

Route::post('/illness_patient',[Controller::class,'illness_patient'])->name('insert_illness_patient');

Route::delete('/illness_patient/{patient}/{illness}', [Controller::class, 'd_illness_patient'])->name('destroy_illness_patient');

Route::post('/export/Addresses', [ExportController::class,'exportAddresses'])->name('exportAddresses');

Route::post('/export/Illnesses', [ExportController::class,'exportIllnesses'])->name('exportIllnesses');

Route::post('/export/Doctors', [ExportController::class,'exportDoctors'])->name('exportDoctors');

Route::post('/export/Wards', [ExportController::class,'exportWards'])->name('exportWards');

Route::post('/export/Patients', [ExportController::class,'exportPatients'])->name('exportPatients');

Route::post('/import/Patients', [ImportController::class, 'importPatients'])->name('importPatients');

Route::post('/import/Illnesses', [ImportController::class, 'importIllnesses'])->name('importIllnesses');

Route::post('/import/Wards', [ImportController::class, 'importWards'])->name('importWards');

Route::post('/import/Doctors', [ImportController::class, 'importDoctors'])->name('importDoctors');

Route::post('/import/Addresses', [ImportController::class, 'importAddresses'])->name('importAddresses');


// Route::post('/admin/storeIllness',[IllnessController::class,'store']);

// Route::post('/admin/updateIllness',[IllnessController::class,'update']);

// Route::delete('/admin/destroyIllness/{id}', [IllnessController::class, 'destroy' ])->name('illnesses.destroy');

// Route::post('/admin/storeWard',[WardController::class,'store']);

// Route::post('/admin/updateWard',[WardController::class,'update']);

// Route::delete('/admin/destroyWard/{id}', [WardController::class, 'destroy' ])->name('wards.destroy');
