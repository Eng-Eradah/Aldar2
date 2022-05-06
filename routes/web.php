<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\GoalController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ConfigureController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdvertismentController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReportController;
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
Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
    Route::group(['prefix' =>'admin'],function(){

//configure system page
Route::get('/configure',[ConfigureController::class,'index'])->name('configure');
Route::get('/addconfigure/{type}/{id?}',[ConfigureController::class,'create'])->name('addconfigure');
Route::get('/toggle_configure/{id?}',[ConfigureController::class,'toggle'])->name('toggle_configure');
Route::post('/add_configure',[ConfigureController::class,'store'])->name('add_configure');

//category Page
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/addCat/{id?}',[CategoryController::class,'create'])->name('addCat');
Route::get('/toggle_category/{id?}',[CategoryController::class,'toggle'])->name('toggle_category');
Route::post('/add_category',[CategoryController::class,'store'])->name('add_category');
//Goal Page
Route::get('/goals',[GoalController::class,'index'])->name('goals');
Route::get('/addGoals/{id?}',[GoalController::class,'create'])->name('addGoals');
Route::get('/toggle_goals/{id?}',[GoalController::class,'toggle'])->name('toggle_goals');
Route::post('/add_goals',[GoalController::class,'store'])->name('add_goals');
//Service page
Route::get('/service',[ServiceController::class,'index'])->name('service');
Route::get('/addService/{id?}',[ServiceController::class,'create'])->name('addService');
Route::get('/toggle_service/{id?}',[ServiceController::class,'toggle'])->name('toggle_service');
Route::post('/add_service',[ServiceController::class,'store'])->name('add_service');
//silder page
Route::get('/slider',[SliderController::class,'index'])->name('slider');
Route::get('/addSlider/{id?}',[SliderController::class,'create'])->name('addSlider');
Route::get('/toggle_silder/{id?}',[SliderController::class,'toggle'])->name('toggle_silder');
Route::post('/add_silder',[SliderController::class,'store'])->name('add_silder');
//advertisment page
Route::get('/advertisment',[AdvertismentController::class,'index'])->name('advertisment');
Route::get('/addAds/{id?}',[AdvertismentController::class,'create'])->name('addAds');
Route::get('/toggle_ads/{id?}',[AdvertismentController::class,'toggle'])->name('toggle_ads');
Route::post('/add_ads',[AdvertismentController::class,'store'])->name('add_ads');
//lang page
Route::get('/lang',[LangController::class,'index'])->name('lang');
Route::get('/addlang/{id?}',[LangController::class,'create'])->name('addlang');
Route::get('/toggle_lang/{id?}',[LangController::class,'toggle'])->name('toggle_lang');
Route::post('/add_lang',[LangController::class,'store'])->name('add_lang');
//book page
Route::get('/book',[BookController::class,'index'])->name('book');
Route::get('/addbook/{id?}',[BookController::class,'create'])->name('addbook');
Route::get('/toggle_book/{id?}',[BookController::class,'toggle'])->name('toggle_book');
Route::post('/add_book',[BookController::class,'store'])->name('add_book');
//user route
Route::get('/user',[UserController::class,'index'])->name('user');
Route::get('/adduser/{id?}',[UserController::class,'create'])->name('adduser');
Route::get('/toggle_user/{id?}',[UserController::class,'toggle'])->name('toggle_user');
Route::post('/add_user',[UserController::class,'store'])->name('add_user');
Route::get('/virefiy_email/{token}',[UserController::class,'verifyEmail'])->name('virefiy_email');
//report page
Route::get('/report',[ReportController::class,'index'])->name('report');
Route::get('/addreport/{id?}',[ReportController::class,'create'])->name('addreport');
Route::get('/toggle_report/{id?}',[ReportController::class,'toggle'])->name('toggle_report');
Route::post('/add_report',[ReportController::class,'store'])->name('add_report');

});
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
