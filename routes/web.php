<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function (){
    Route::get('/', [SesiController::class,'index'])->name('login');
    Route::post('/', [SesiController::class,'login']);

});
Route::get('/home', function (){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/Dashboard/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/Dashboard/user', [AdminController::class, 'pembeli'])->middleware('userAkses:pembeli');
    Route::get('/logout',[SesiController::class, 'logout'] );
});

