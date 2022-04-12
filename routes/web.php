<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\TestController;
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
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TrafficsController;






Auth::routes();
//Route::get('/', function () {return view('front.index');})->name('home');
Route::get('/',[FrontController::class,'index'])->name('home');
Route::post('/front/make_reservation',[FrontController::class,'make_reservation'])->name('front.make_reservation');
Route::get('make_reservation',[TrafficsController::class,'index'])->name('customer.make_reservation');

Route::prefix('admin')->middleware(['auth','CheckRole:ADMIN','ActiveAccount'])->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');


    //Route::get('/profile',[AdminController::class,'upload_image']);

    Route::resource('contacts',ContactController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('venues',VenuesController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('events',EventsController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::get('events/change_status/{status}/{id}',[EventsController::class,'change_status'])->name('events.change_status')->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('users',UserController::class)->middleware(['CheckRole:ADMIN|EDITOR']);
    Route::resource('articles',ArticleController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('system-calendar',CalendarController::class);
    Route::resource('redirections',RedirectionController::class)->middleware(['CheckRole:ADMIN|EDITOR']);

    Route::get('traffics',[TrafficsController::class,'index'])->name('traffics.index');
    Route::get('traffics/{traffic}/logs',[TrafficsController::class,'logs'])->name('traffics.logs');
    Route::get('error-reports',[TrafficsController::class,'error_reports'])->name('traffics.error-reports');
    Route::get('error-reports/{report}',[TrafficsController::class,'error_report'])->name('traffics.error-report');

    Route::prefix('upload')->name('upload.')->group(function(){
        Route::post('/image',[HelperController::class,'upload_image'])->name('image');
        Route::post('/file',[HelperController::class,'upload_file'])->name('file');
        Route::post('/remove-file',[HelperController::class,'remove_files'])->name('remove-file');
    });
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/',[ProfileController::class,'index'])->name('index');
        Route::get('/edit',[ProfileController::class,'edit'])->name('edit');
        Route::put('/update',[ProfileController::class,'update'])->name('update');
        Route::put('/update-password',[ProfileController::class,'update_password'])->name('update-password');
        Route::put('/update-email',[ProfileController::class,'update_email'])->name('update-email');
    });
    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::get('/',[NotificationsController::class,'index'])->name('index');
        Route::get('/ajax',[NotificationsController::class,'notifications_ajax'])->name('ajax');
        Route::post('/see',[NotificationsController::class,'notifications_see'])->name('see');
    });
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/',[SettingController::class,'index'])->name('index');
        Route::put('/update',[SettingController::class,'update'])->name('update');
    });
});


Route::get('blocked',[HelperController::class,'blocked_user'])->name('blocked');
Route::get('robots.txt',[HelperController::class,'robots']);
Route::get('manifest.json',[HelperController::class,'manifest']);
Route::get('sitemap.xml',[SiteMapController::class,'sitemap']);
Route::get('sitemaps/links','SiteMapController@custom_links');
Route::get('sitemaps/{name}/{page}/sitemap.xml',[SiteMapController::class,'viewer']);


//pages
Route::view('about','front.pages.about');
Route::view('privacy','front.pages.privacy');
Route::view('terms','front.pages.terms');
Route::view('contact','front.pages.contact');
Route::get('article/{article}',[FrontController::class,'article'])->name('article.show');
Route::get('blog',[FrontController::class,'blog'])->name('blog');
Route::post('contact',[FrontController::class,'contact_post'])->name('contact-post');