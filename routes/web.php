<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SubCategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\myaccount\MyAcountController;
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

    Route::prefix('/dashbord/admin')->controller(AdminController::class)->name('admin.')->group(function(){

        Route::get('','dasbord')->name('dashbord');
        Route::get('/all-categorie','Categorie')->name('categorie');

        Route::get('/create-categorie','createCategorie')->name('create.categorie');
        Route::post('/store-categorie','storeCategorie')->name('store.categorie');

    });


 });


//  SUBCATEGORIE 


Route::group(['middleware' => ['role:admin|writter']], function () { 

    Route::prefix('/dashbord/admin')->controller(SubCategorieController::class)->name('admin.')->group(function(){

        
        Route::get('/all-subcategorie','allSubcategorie')->name('all.subcategorie');
        Route::get('/create-subcategorie','createSubCategorie')->name('create.subcategorie');


        Route::post('/store-subcategorie','storeSubCategorie')->name('store.subcategorie');


       

    });


 });


//  PRODUCT


Route::group(['middleware' => ['role:admin|writter']], function () { 

    Route::prefix('/dashbord/admin')->controller(ProductController::class)->name('admin.')->group(function(){

        
        Route::get('/all-product','allProduct')->name('all.product');
        Route::get('/create-product','createProduct')->name('create.product');
        Route::post('/store-product','storeProduct')->name('store.product');


        Route::get('/edite-product/{id}','editeProduct')->name('edite.product');
        Route::put('/update-product/{id}','updateProduct')->name('update.product');



        Route::delete('/delete-product/{id}','delete')->name('delete.product');


        // SELECT SUBCATEGORY WHEN CHANGE CATEGORIE
        Route::get('/select-categorie','selectCategorie')->name('select.categorie');
       
       
        




    });


 });


//  SHOW ORDER ONLY ADMIN


Route::group(['middleware' => ['role:admin']], function () { 

    Route::prefix('/dashbord/admin')->controller(ProductController::class)->name('admin.')->group(function(){

        Route::get('/show-all-order','showAllOrder')->name('all.order');
       
       
        




    });


 });



//  MY ACCOUNT


Route::group(['middleware' => 'auth'], function () { 

    Route::prefix('/myaccount')->controller(MyAcountController::class)->name('profile.')->group(function(){

        
       Route::get('','myAccount')->name('account');
       Route::get('/order','myOrder')->name('myorder');
       


    //    PROCOCESS CHUCKOUT

    Route::get('/processtocheckout/{id}','processToCheckout')->name('processtocheckout');
        
    
    // STORE USER ADDDRESS AND checkout

    Route::post('/chuckout','Checkout')->name('checkout');

    



    });




 });


