<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrafficsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\ReservationController;


Auth::routes();
//Route::get('/', function () {return view('front.index');})->name('home');


Route::prefix('admin')->middleware(['auth', 'CheckRole:ADMIN', 'ActiveAccount'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');


    //Route::get('/profile',[AdminController::class,'upload_image']);

    Route::resource('contacts', ContactController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('venues', VenuesController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('events', EventsController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::get('events/change_status/{status}/{id}', [EventsController::class, 'change_status'])->name('events.change_status')->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('users', UserController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('system-calendar', CalendarController::class);
    Route::resource('redirections', RedirectionController::class)->middleware(['CheckRole:ADMIN|EDITOR']);

    Route::get('traffics', [TrafficsController::class, 'index'])->name('traffics.index');
    Route::get('traffics/{traffic}/logs', [TrafficsController::class, 'logs'])->name('traffics.logs');
    Route::get('error-reports', [TrafficsController::class, 'error_reports'])->name('traffics.error-reports');
    Route::get('error-reports/{report}', [TrafficsController::class, 'error_report'])->name('traffics.error-report');

    Route::prefix('upload')->name('upload.')->group(function () {
        Route::post('/image', [HelperController::class, 'upload_image'])->name('image');
        Route::post('/file', [HelperController::class, 'upload_file'])->name('file');
        Route::post('/remove-file', [HelperController::class, 'remove_files'])->name('remove-file');
    });
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
        Route::put('/update-password', [ProfileController::class, 'update_password'])->name('update-password');
        Route::put('/update-email', [ProfileController::class, 'update_email'])->name('update-email');
    });
    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::get('/', [NotificationsController::class, 'index'])->name('index');
        Route::get('/ajax', [NotificationsController::class, 'notifications_ajax'])->name('ajax');
        Route::post('/see', [NotificationsController::class, 'notifications_see'])->name('see');
    });
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::put('/update', [SettingController::class, 'update'])->name('update');
    });
});


Route::get('blocked', [HelperController::class, 'blocked_user'])->name('blocked');
Route::get('robots.txt', [HelperController::class, 'robots']);
Route::get('manifest.json', [HelperController::class, 'manifest']);
Route::get('sitemap.xml', [SiteMapController::class, 'sitemap']);
Route::get('sitemaps/links', [SiteMapController::class, 'custom_links']);
Route::get('sitemaps/{name}/{page}/sitemap.xml', [SiteMapController::class, 'viewer']);


//pages
Route::view('about', 'front.pages.about');
Route::view('privacy', 'front.pages.privacy');
Route::view('terms', 'front.pages.terms');
Route::view('contact', 'front.pages.contact');

Route::get('article/{article}', [HomeController::class, 'article'])->name('article.show');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::post('contact', [HomeController::class, 'contact_post'])->name('contact-post');

//front page
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('customer')->middleware(['auth', 'CheckRole:ADMIN', 'ActiveAccount'])->name('customer.')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'register_store'])->name('register.store');

    Route::post('/make_reservation', [ReservationController::class, 'make_reservation'])->name('make_reservation');
    Route::get('/my_reservations', [ReservationController::class, 'my_reservations'])->name('my_reservations');
});
