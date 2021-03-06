                <?php

use App\Http\Controllers\Admin\AdvertismentController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigureController;
use App\Http\Controllers\Admin\DonorController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GoalController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/Goal', [HomeController::class, 'goal'])->name('Goal');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'service'])->name('services');
    Route::get('/events', [HomeController::class, 'event'])->name('events');
    Route::get('/event/details/{id}', [HomeController::class, 'eventDetails'])->name('event.details');
    Route::get('/book/details/{id}', [HomeController::class, 'bookDetails'])->name('book.details');
    Route::get('/library/{id?}', [HomeController::class, 'library'])->name('library');
    Route::get('/download/{id?}', [HomeController::class, 'download'])->name('download');
    Route::get('/job/details/{id}', [HomeController::class, 'jobDetails'])->name('job.details');
    Route::get('/jobs', [HomeController::class, 'job'])->name('jobs');
    Route::get('/apply/{id}', [HomeController::class, 'apply'])->name('apply');
    Route::post('/applyJob/{id}', [HomeController::class, 'applyJob'])->name('applyJob');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/Donor', [HomeController::class, 'donor'])->name('Donor');
    Route::get('/send_contact', [HomeController::class, 'saveContact'])->name('send_contact');

});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth', 'roles:admin']], function () {
    Route::group(['prefix' => 'admin'], function () {

        //configure system page
        Route::get('/configure', [ConfigureController::class, 'index'])->name('configure');
        Route::get('/addconfigure/{type}/{id?}', [ConfigureController::class, 'create'])->name('addconfigure');
        Route::get('/toggle_configure/{id?}', [ConfigureController::class, 'toggle'])->name('toggle_configure');
        Route::post('/add_configure', [ConfigureController::class, 'store'])->name('add_configure');

        //category Page
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/addCat/{id?}', [CategoryController::class, 'create'])->name('addCat');
        Route::get('/toggle_category/{id?}', [CategoryController::class, 'toggle'])->name('toggle_category');
        Route::post('/add_category', [CategoryController::class, 'store'])->name('add_category');
        //Goal Page
        Route::get('/goals', [GoalController::class, 'index'])->name('goals');
        Route::get('/addGoals/{id?}', [GoalController::class, 'create'])->name('addGoals');
        Route::get('/toggle_goals/{id?}', [GoalController::class, 'toggle'])->name('toggle_goals');
        Route::post('/add_goals', [GoalController::class, 'store'])->name('add_goals');
        //Service page
        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::get('/addService/{id?}', [ServiceController::class, 'create'])->name('addService');
        Route::get('/toggle_service/{id?}', [ServiceController::class, 'toggle'])->name('toggle_service');
        Route::post('/add_service', [ServiceController::class, 'store'])->name('add_service');
        //silder page
        Route::get('/slider', [SliderController::class, 'index'])->name('slider');
        Route::get('/addSlider/{id?}', [SliderController::class, 'create'])->name('addSlider');
        Route::get('/toggle_silder/{id?}', [SliderController::class, 'toggle'])->name('toggle_silder');
        Route::post('/add_silder', [SliderController::class, 'store'])->name('add_silder');
        //advertisment page
        Route::get('/advertisment', [AdvertismentController::class, 'index'])->name('advertisment');
        Route::get('/addAds/{id?}', [AdvertismentController::class, 'create'])->name('addAds');
        Route::get('/toggle_ads/{id?}', [AdvertismentController::class, 'toggle'])->name('toggle_ads');
        Route::post('/add_ads', [AdvertismentController::class, 'store'])->name('add_ads');
        //lang page
        Route::get('/lang', [LangController::class, 'index'])->name('lang');
        Route::get('/addlang/{id?}', [LangController::class, 'create'])->name('addlang');
        Route::get('/toggle_lang/{id?}', [LangController::class, 'toggle'])->name('toggle_lang');
        Route::post('/add_lang', [LangController::class, 'store'])->name('add_lang');
        //book page
        Route::get('/book', [BookController::class, 'index'])->name('book');
        Route::get('/addbook/{id?}', [BookController::class, 'create'])->name('addbook');
        Route::get('/toggle_book/{id?}', [BookController::class, 'toggle'])->name('toggle_book');
        Route::post('/add_book', [BookController::class, 'store'])->name('add_book');
        //user route
        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/adduser/{id?}', [UserController::class, 'create'])->name('adduser');
        Route::get('/toggle_user/{id?}', [UserController::class, 'toggle'])->name('toggle_user');
        Route::post('/add_user', [UserController::class, 'store'])->name('add_user');
        Route::get('/virefiy_email/{token}', [UserController::class, 'verifyEmail'])->name('virefiy_email');
        //donor page
        Route::get('/donor', [DonorController::class, 'index'])->name('donor');
        Route::get('/adddonor/{id?}', [DonorController::class, 'create'])->name('adddonor');
        Route::get('/toggle_donor/{id?}', [DonorController::class, 'toggle'])->name('toggle_donor');
        Route::post('/add_donor', [DonorController::class, 'store'])->name('add_donor');
        //report
        //report page
        Route::get('/report', [ReportController::class, 'index'])->name('report');
        Route::get('/addreport/{id?}', [ReportController::class, 'create'])->name('addreport');
        Route::get('/toggle_report/{id?}', [ReportController::class, 'toggle'])->name('toggle_report');
        Route::post('/add_report', [ReportController::class, 'store'])->name('add_report');
        Route::get('/show/{id?}', [ReportController::class, 'show'])->name('show');

        //job page
        Route::get('/job/{id?}', [JobController::class, 'index'])->name('job');
        Route::get('/addjob/{id?}', [JobController::class, 'create'])->name('addjob');
        Route::get('/Employment/{id?}', [JobController::class, 'Employment'])->name('Employment');
        Route::get('/toggle_job/{id?}', [JobController::class, 'toggle'])->name('toggle_job');
        Route::post('/add_job', [JobController::class, 'store'])->name('add_job');
        //event page
        Route::get('/event', [EventController::class, 'index'])->name('event');
        Route::get('/addEvent/{id?}', [EventController::class, 'create'])->name('addEvent');
        Route::get('/toggle_event/{id?}', [EventController::class, 'toggle'])->name('toggle_event');
        Route::post('/add_event', [EventController::class, 'store'])->name('add_event');

    });
});
//lawyer route
//report page
Route::get('/reports', [ReportController::class, 'index'])->name('reports');
Route::get('/userReport', [ReportController::class, 'userReport'])->name('userReport');
Route::get('/admin/addreports/{id?}', [ReportController::class, 'create'])->name('addreports');
Route::get('/admin/toggle_reports/{id?}', [ReportController::class, 'toggle'])->name('toggle_reports');
Route::post('/admin/add_reports', [ReportController::class, 'store'])->name('add_reports');
Route::get('/show/{id?}', [ReportController::class, 'show'])->name('show');

// user authentication
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/check_user', [AuthController::class, 'checkUser'])->name('check_user');
Route::get('/logout_user', [AuthController::class, 'logout'])->name('logout_user');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
