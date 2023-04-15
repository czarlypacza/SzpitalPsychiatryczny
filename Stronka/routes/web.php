<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IllnessController;

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
    return view('index');
});


// Route::get('/admin', function () {
//     return view('admin');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[Controller::class,'admin']);

Route::post('/admin/storeIllness',[IllnessController::class,'store']);

Route::post('/admin/updateIllness',[IllnessController::class,'update']);

Route::delete('/admin/destroyIllness/{id}', [IllnessController::class, 'destroy' ])->name('illnesses.destroy');
