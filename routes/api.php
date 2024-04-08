<?php
use App\Http\Controllers\cartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cart/{id}', [cartController::class,'apiIndex'])->name('cartView');
Route::post('/addcart/{productid}', [cartController::class,'cartStore'])->name('cartproduct');
