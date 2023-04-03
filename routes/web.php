<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard',[ItemController::class,'index'])->name('dashboard');
    Route::prefix('admin')->group(function(){

        // item
        Route::get('item',[ItemController::class,'index'])->name('admin#item');
        Route::get('addItem',[ItemController::class,'addItem'])->name('admin#addItem');
        Route::post('add',[ItemController::class,'add'])->name('admin#add');

        // category
        Route::get('category',[CategoryController::class,'index'])->name('admin#category');
        Route::get('addCat',[CategoryController::class,'addCat'])->name('admin#addCat');
        Route::post('create',[CategoryController::class,'add'])->name('admin#create');
        Route::get('ajax/category/change',[CategoryController::class,'ajaxChangeStatus'])->name('admin#ajaxChangeStatus');

        Route::get('delete/{id}',[AdminController::class,'delete'])->name('admin#delete');


        });

        Route::prefix('user')->group(function(){
            Route::get('homePage',[UserController::class,'home'])->name('user#home');
            Route::get('fashionPage',[UserController::class,'fashion'])->name('user#fashion');
            Route::get('viewPage/{id}',[UserController::class,'viewPage'])->name('user#viewPage');
            Route::get('ajax/status',[UserController::class,'ajaxStatus'])->name('user#ajaxStatus');


        });

});
