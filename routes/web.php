<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;






Route::get('/',[HomeController::class,'HomePage'])->name("home.page");

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/', function () {
//         return view('HomeContant.Home');
//     })->name('dashboard');
// });


// FOR DASHBORD

Route::group(['middleware' => ['role:admin|writter']], function () { 

    Route::prefix('/admin')->controller(AdminController::class)->name('admin.')->group(function(){

        Route::get('/dashbord','dasbord')->name('dashbord');

    });


 });