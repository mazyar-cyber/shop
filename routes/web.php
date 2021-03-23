<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminUserController;

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
Route::resource('/', \App\Http\Controllers\FrontEnd\mainController::class);
Route::resource('/user', \App\Http\Controllers\FrontEnd\UserController::class);
Route::get('/provinces', [\App\Http\Controllers\Auth\RegisterController::class, 'provinces'])->name('get.province');
Route::get('/cities/{id}', [\App\Http\Controllers\Auth\RegisterController::class, 'cities'])->name('get.cities');
Route::resource('/FrontCategory', \App\Http\Controllers\FrontEnd\CategoryController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        $user = Auth::user();
        $orders = \App\Models\Orders::where('user_id', Auth::id())->with('product.product')->get();
//        return $orders;
        return view("FrontEnd.Profile.index", compact(['user', 'orders']));
    });
    Route::resource('/basket', \App\Http\Controllers\FrontEnd\BasketController::class);
    Route::resource('/FrontProduct', \App\Http\Controllers\FrontEnd\ProductController::class);
    Route::get('/basket/add/{id}', [\App\Http\Controllers\FrontEnd\BasketController::class, 'add'])->name('basket.add');
    Route::get('/basket/delete/{id}', [\App\Http\Controllers\FrontEnd\BasketController::class, 'deleteBasket'])->name('basket.delete');
    Route::resource('/cart', \App\Http\Controllers\FrontEnd\CartController::class);
    Route::post('/api/changeCart/{id}/{id2}', [\App\Http\Controllers\FrontEnd\CartController::class, 'changeCount'])->name('cart.changeCount');
    Route::get('/getBasket', [\App\Http\Controllers\FrontEnd\CartController::class, 'getData'])->name('baskets.get');
    Route::post('/checkCoupon', [\App\Http\Controllers\FrontEnd\CouponController::class, 'check'])->name('check.coupon');
    Route::post('/calcPrice', [\App\Http\Controllers\FrontEnd\CouponController::class, 'calcPrice'])->name('calc.price');
    Route::resource('/order', \App\Http\Controllers\FrontEnd\OrderController::class);
    Route::get("/payment/{id}", [App\Http\Controllers\FrontEnd\PaymentController::class, 'verify'])->name('payment.verify');
});
Route::prefix('admin')->middleware(['auth', 'IsAdmin'])->group(function () {
    Route::resource('email', \App\Http\Controllers\admin\AdminEmailController::class);
    Route::resource('order', \App\Http\Controllers\admin\AdminOrderController::class);
    Route::resource('users', AdminUserController::class);
    Route::resource('adminBaskets', \App\Http\Controllers\admin\AdminBasketContrller::class);
    Route::resource('procat', \App\Http\Controllers\admin\AdminProCatController::class);
    Route::get('procatAttr', [\App\Http\Controllers\admin\AdminProCatController::class, 'indexGiveAttributeToCategory'])->name('procatAttr');
    Route::post('giveProcatAttr', [\App\Http\Controllers\admin\AdminProCatController::class, 'giveAttributeToCategory'])->name('giveProcatAttr');
    Route::get('showProcatAttr', [\App\Http\Controllers\admin\AdminProCatController::class, 'showCategoryAttribute'])->name('showProcatAttr');
    Route::resource('productProperty', \App\Http\Controllers\admin\AdminProductPropertyController::class);
    Route::resource('ProductPropertyValue', \App\Http\Controllers\admin\AdminProductPropertyValue::class);
    Route::resource('brand', \App\Http\Controllers\admin\AdminBrandController::class);
    Route::post('brandSelectedDelete', '\App\Http\Controllers\admin\AdminBrandController@selectedDestroy')->name('brand.selectedDel');
    Route::post('branduploader', "\App\Http\Controllers\admin\AdminBrandController@Uploader")->name('brand.upload');
    Route::post('productPropertySelectedDelete', "\App\Http\Controllers\admin\AdminProductPropertyController@deleteAll")->name('property.deleteAll');
    Route::delete('procatdeleteAll', "\App\Http\Controllers\admin\AdminProCatController@deleteAll")->name('proCat.deleteAll');
    Route::post('proCatSelectedDelete', "\App\Http\Controllers\admin\AdminProCatController@selectedDelete")->name('proCat.deleteSelected');
    Route::resource('product', \App\Http\Controllers\admin\AdminProductController::class);
    Route::post('productSelectedDelete', "\App\Http\Controllers\admin\AdminProductController@selectedDelete")->name('product.deleteSelected');
    Route::resource('coupons', \App\Http\Controllers\admin\AdminCouponController::class);
    Route::get('changeCoupon/{status}/{id}', [\App\Http\Controllers\admin\AdminCouponController::class, 'changeStatus']);
});

Route::prefix('admin/api')->group(function () {
    Route::post('getAttr/{id}', [\App\Http\Controllers\admin\AdminProCatController::class, 'getAttr'])->name('getAttr');
    Route::post('searchProduct', [\App\Http\Controllers\admin\AdminProductController::class, 'search'])->name('searchProduct');
    Route::get('getUser', [\App\Http\Controllers\admin\AdminUserController::class, 'indexApi'])->name('getUser');
    Route::get('getProducts', [\App\Http\Controllers\admin\AdminProductController::class, 'indexApi'])->name('getProduct');
    Route::get('deleteProduct/{id}', [\App\Http\Controllers\admin\AdminProductController::class, 'delete'])->name('deleteProduct');
    Route::post('deleteSelectedProduct', [\App\Http\Controllers\admin\AdminProductController::class, 'deleteSelectedProduct'])->name('deleteSelectedProduct');
});

Route::prefix("frontEnd/api")->group(function () {
    Route::get('getCatProduct/{id}', [\App\Http\Controllers\FrontEnd\CategoryController::class, 'getProduct'])->name('apiGet.productCat');
    Route::get('getCatProps/{id}', [\App\Http\Controllers\FrontEnd\CategoryController::class, 'getProps'])->name('apiGet.productProps');
    Route::post('getSearchProps/{id}/{page}', [\App\Http\Controllers\FrontEnd\CategoryController::class, 'searchProp'])->name('apiGet.searchProps');
    Route::get('getCatSortedProduct/{id}/{col}/{page}', [\App\Http\Controllers\FrontEnd\CategoryController::class, 'getSortedProduct'])->name('apiGet.productSortCat');
    Route::get('deleteBasket/{id}', [\App\Http\Controllers\FrontEnd\BasketController::class, 'deleteBasket'])->middleware('auth');
    Route::get('getProductLike/{id}', [\App\Http\Controllers\FrontEnd\ProductLikeController::class, 'getProductLike'])->name('product.like');
    Route::get('likeProduct/{id}/{param}', [\App\Http\Controllers\FrontEnd\ProductLikeController::class, 'like']);
});

//trying relation between models
Route::get('/product/{id}', function ($id) {
//    $brand=\App\Models\Brands::find($id);
    $product = \App\Models\Product::find($id);
    $productProp = \App\Models\Product_prop::find($id);
    $user = User::find($id);
    $cat = \App\Models\ProCat::find($id);
    $products = \App\Models\Product::where('cat_id', $id)->get();
    foreach ($products as $product) {
        foreach ($product->propertyValue as $value) {
            if ($value->title == 'نخ') {
                echo '1.';
            }
        }
        $property[] = $product->propertyValue;

    }
//    return $property;
//    return $cat->childrenRecursive;
//    return $user->coupon;
//    return $user->baskets;
//    return $product->created_at;
//    return Auth::user();
//    return $product->propertyValue;
//    $cat=\App\Models\ProCat::find($id);
//     foreach ($cat->property as $prop){
//         echo $prop->title.'..../';
//     }
});


//laravel ui
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});
//laravel ui
Route::get('/testEvent', function () {
    $price = event(new \App\Events\CalcMoneyEvent());
    return $price;
});



