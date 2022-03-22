<?php
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderdetailController;
use App\Http\Controllers\Admin\ThongKeController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Services\ProductDetail\ProductDetailService;
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
Route::get('admin/users/logout', [LoginController::class, 'logout']);

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
//        Route::prefix('producttype')->group(function () {
//            Route::get('add', [ProductTypeController::class, 'create']);
//            Route::post('add', [ProductTypeController::class, 'store']);
//            Route::get('list', [ProductTypeController::class, 'index']);
//            Route::get('edit/{productType}', [ProductTypeController::class, 'show']);
//            Route::post('edit/{productType}', [ProductTypeController::class, 'update']);
//            Route::DELETE('destroy', [ProductTypeController::class, 'destroy']);
//        });

        #Product
        Route::prefix('product')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
            Route::get('view/{product}', [ProductController::class, 'view']);
//            Route::get('productdetails/add', [ProductDetailController::class, 'create']);
//            Route::post('productdetails/add', [ProductDetailController::class, 'store']);
//            Route::get('productdetails/edit/{image}', [ProductDetailController::class, 'show']);
//            Route::post('productdetails/edit/{image}', [ProductDetailController::class, 'update']);
//            Route::DELETE('productdetails/destroy', [ProductDetailController::class, 'destroy']);
        });

        #Role
        Route::prefix('roles')->group(function () {

        });

        #Image
        Route::prefix('image')->group(function () {
            Route::get('view/{product}', [ImageController::class, 'view']);
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
        #Users
        Route::prefix('users')-> group(function(){
            Route::get('list', [LoginController::class, 'list']);
            Route::get('edit/{user}', [LoginController::class, 'show']);
            Route::post('edit/{user}', [LoginController::class, 'update']);
            Route::DELETE('destroy', [LoginController::class, 'destroy']);
        });

        #Product Detail
        Route::prefix('productdetails')->group(function () {
            Route::get('add', [ProductDetailController::class, 'create']);
            Route::post('add', [ProductDetailController::class, 'store']);
            Route::get('list', [ProductDetailController::class, 'index']);
            Route::get('edit/{image}', [ProductDetailController::class, 'show']);
            Route::post('edit/{image}', [ProductDetailController::class, 'update']);
            Route::DELETE('destroy', [ProductDetailController::class, 'destroy']);
        });
        #Order
        Route::prefix('order')->group(function () {

            Route::get('list', [OrderController::class, 'index']);
            Route::get('view/{order}', [OrderController::class, 'view']);
            Route::get('edit/{order}', [OrderController::class, 'show']);
            Route::post('edit/{order}', [OrderController::class, 'update']);
            Route::DELETE('destroy', [OrderController::class, 'destroy']);

        });
        #OrderDetail
        Route::prefix('orderdetails')->group(function () {

            Route::get('list', [OrderdetailController::class, 'index']);
            Route::get('edit/{orderdetail}', [OrderdetailController::class, 'show']);
            Route::post('edit/{orderdetail}', [OrderdetailController::class, 'update']);
            Route::DELETE('destroy/{orderdetail}', [OrderdetailController::class, 'destroy']);
        });
        Route::prefix('thongke')->group(function(){
            Route::get('index',[ThongKeController::class,'index']);
            Route::get('detail_list',[ThongKeController::class,'detail_list']);
        });
    });
});
Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('category/{id}-{slug}.html', [MenuController::class, 'index']);
Route::post('/san-pham/search', [MenuController::class, 'search']);

Route::get('/san-pham/filter', [MenuController::class, 'filter']);

Route::get('san-pham/{id}-{slug}.html', [\App\Http\Controllers\ProductController::class, 'index']);

Route::post('/add-cart', [CartController::class, 'index']);
Route::post('/update-cart', [CartController::class, 'update']);

Route::get('/carts', [CartController::class, 'show']);
Route::get('/carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);
//Route::post('/carts', [CartController::class, 'index']);
//Route::get('/checkout', [CartController::class, 'show']);

