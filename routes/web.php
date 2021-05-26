<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DispsofaController;
use App\Http\Controllers\DispchairController;
use App\Http\Controllers\DisptableController;
use App\Http\Controllers\YouraccountController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SofaController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\TableController;
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


route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

route::get('/',[MainController::class,'login'])->name('auth.login');

route::get('/auth/register',[MainController::class,'register'])->name('auth.register');

route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/home',[SofaController::class,'index']);
    route::get('/admin/youraccount',[MainController::class,'youraccount']);
   
    route::get('/aboutus',[AboutusController::class,'create']);
    route::get('/admin/{id}/auth/edit',[MainController::class,'edit']);
    route::post('/usereditprocess/{id}',[MainController::class,'update']);
    route::get('/contactus',[ContactusController::class,'create']);
    route::get('/sofa',[DispsofaController::class,'index']);
    route::get('/chair',[DispchairController::class,'index']);
    route::get('/table',[DisptableController::class,'index']);
    Route::get("sofadropview/{id}",[SofaController::class,'sofadropview']);
    Route::get("chairdropview/{id}",[ChairController::class,'chairdropview']);
    Route::get("tabledropview/{id}",[TableController::class,'tabledropview']);
    Route::post("add_to_cart",[SofaController::class,'addToCart']);
    Route::get("cartlist",[SofaController::class,'cartList']); 
    Route::get("removecart/{id}",[SofaController::class,'removeCart']); 
    Route::get("ordernow",[SofaController::class,'orderNow']); 
    Route::post("orderplace",[SofaController::class,'orderPlace']);
    Route::get("myorders",[SofaController::class,'myOrders']);
    Route::get("search",[SofaController::class,'search']);
}); 