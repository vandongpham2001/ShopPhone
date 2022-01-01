<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    //
    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Category
        Route::prefix('category')->group(function () {
            Route::get('add', [CategoryController::class, 'create']);
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('list', [CategoryController::class, 'index']);
            Route::get('edit/{category}', [CategoryController::class, 'show']);
            Route::post('edit/{category}', [CategoryController::class, 'update']);
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
        });

        #ProductType
        Route::prefix('producttype')->group(function () {
            Route::get('add', [ProductTypeController::class, 'create']);
            Route::post('add', [ProductTypeController::class, 'store']);
            Route::get('list', [ProductTypeController::class, 'index']);
            Route::get('edit/{productType}', [ProductTypeController::class, 'show']);
            Route::post('edit/{productType}', [ProductTypeController::class, 'update']);
            Route::DELETE('destroy', [ProductTypeController::class, 'destroy']);
        });

        #Product
        Route::prefix('product')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });

        #Role
        Route::prefix('roles')->group(function () {

        });

        #Image
        Route::prefix('image')->group(function () {
            Route::get('add', [ImageController::class, 'create']);
            Route::post('add', [ImageController::class, 'store']);
            Route::get('list', [ImageController::class, 'index']);
            Route::get('edit/{image}', [ImageController::class, 'show']);
            Route::post('edit/{image}', [ImageController::class, 'update']);
            Route::DELETE('destroy', [ImageController::class, 'destroy']);
        });

        #Banner
        Route::prefix('banner')->group(function () {
            Route::get('add', [BannerController::class, 'create']);
            Route::post('add', [BannerController::class, 'store']);
            Route::get('list', [BannerController::class, 'index']);
            Route::get('edit/{banner}', [BannerController::class, 'show']);
            Route::post('edit/{banner}', [BannerController::class, 'update']);
            Route::DELETE('destroy', [BannerController::class, 'destroy']);
        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

    });


});

