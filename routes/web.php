<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\GoalController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ConfigureController;
use App\Http\Controllers\Admin\SliderController;
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
Route::get('/', function () {
    return view('admin.site.dashboard');
});
//configure system page
Route::get('/configure',[ConfigureController::class,'index'])->name('configure');
Route::get('/addconfigure/{type}/{id?}',[ConfigureController::class,'create'])->name('addconfigure');
Route::get('/toggle_configure/{id?}',[ConfigureController::class,'toggle'])->name('toggle_configure');
Route::post('/add_configure',[ConfigureController::class,'store'])->name('add_configure');

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
