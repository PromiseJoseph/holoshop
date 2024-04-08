<?php
use App\Http\Controllers\cartController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productcontroller;
use App\Providers\AuthServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ProvidersAuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



    Route::middleware('guest')->group( function () {
        //auth && guest
        Route::get('/index',[userController::class,'index'])->name('index');
        
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('/',[productController::class, 'index'])->name('index.auth');
   
        Route::get('/category={category}',[productController::class, 'category'])->name('categories');
        // Route::get('/productspage',[productController::class,'index'])->name('products');
        Route::get('/admin/index',[userController::class,'adminIndex'])->name('index.admin');
        Route::post('/user/logout',[userController::class,'logout'])->name('userlogout');
    
    });

   
Auth::Routes(['verify' => true]);
Route::get('/cart',[cartController::class,'index'])->name('cart.index');
Route::get('/productid={id}',[productController::class, 'show'])->name('productsingle');
Route::post('/codeVer/{userid}',[mailController::class,'codeVerify'])->name('codeVerifier');
Route::get('/accountVerification', function(){
    return view('emails.verinput');
})->name('mailVerView');

Route::get('/location', function () {
    return view('location');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');