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


Route::get('/admin',[Controller::class,'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/admin/storeIllness',[IllnessController::class,'store']);

//Route::delete('/illnesses/{id}', [IllnessController::class, 'destroy', 'id' => $id])->name('illnesses.destroy');

Route::delete('/admin/destroyIllness/{id}', [IllnessController::class, 'destroy' ])->name('illnesses.destroy');
