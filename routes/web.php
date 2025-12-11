<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontController; 
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriberController; 
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserDshboardController;
use App\Http\Controllers\AlbumController; 
use App\Http\Controllers\TrackController;     
use App\Http\Controllers\AlbumTrackController; 
use App\Http\Controllers\ProjectController;   
use App\Http\Controllers\UserContractController;  
use App\Http\Controllers\DevController;

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
// Front Routs
// Route::get('/', [FrontController::class, 'Home'])->name('front');
// Route::post('/acrTest', [DevController::class, 'acrTest'])->name('acrTest');
Route::get('/resultAcr', [DevController::class, 'resultAcr'])->name('resultAcr');
Route::get('/sendFile/{id?}', [DevController::class, 'sendFile'])->name('sendFile');
Route::get('/acrTestTest/{id}', [DevController::class, 'acrTestTest'])->name('acrTestTest');
Route::post('/acrTest', [DevController::class, 'upload'])->name('acrTest');
Route::get('/acrTestForm', [DevController::class, 'create'])->name('acrTestForm');
Route::get('/admin-user-track-list', [AdminController::class, 'Submit'])->name('admin-user-track-list');
Route::get('/admin-user-album-list', [AdminController::class, 'Upload'])->name('admin-user-album-list');
Route::get('/', [FrontController::class, 'Home'])->name('home');
Route::get('/about', [FrontController::class, 'About'])->name('about'); 
Route::get('/portfolio', [FrontController::class, 'Portfolio'])->name('portfolio');
Route::get('/music-distribution-services', [FrontController::class, 'Service'])->name('service');
Route::get('/blog', [FrontController::class, 'Blog'])->name('blog');
Route::get('/blog-detail/{id}', [FrontController::class, 'blogDetail'])->name('blog-detail'); 
Route::get('/contact', [FrontController::class, 'Contact'])->name('contact');
Route::get('/career', [FrontController::class, 'Career'])->name('career');
Route::post('/front-contact-store', [ContactController::class, 'store'])->name('front-contact-store'); 
Route::post('/front-subscriber-store', [SubscriberController::class, 'store'])->name('front-subscriber-store');

Route::prefix('admin')->group(function () {
    //login Routes
    Route::get('/', [LoginController::class, 'newlogin'])->name('admin-login');
    Route::post('/store-login', [LoginController::class, 'login'])->name('store-login');
    Route::post('/newForget', [LoginController::class, 'login'])->name('newForget');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //Admin Dashboard
    //User Routes:
    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

        Route::get('/user-list/{status?}', [UserController::class, 'index'])->name('user-list'); 
        Route::get('user-create', [UserController::class, 'create'])->name('user-create');
        Route::post('user-store', [UserController::class, 'store'])->name('user-store');
        Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
        Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user-update');
        Route::get('/user-delete/{id}', [UserController::class, 'destroy'])->name('user-delete');
        Route::get('/user-detail/{id}', [UserController::class, 'Detail'])->name('user-detail');
        Route::get('/admin-user-track-list/{id}', [UserController::class, 'track'])->name('admin-user-track-list');
        Route::get('/admin-user-album-list/{id}', [UserController::class, 'album'])->name('admin-user-album-list');

  

        //Route::get('/contact', [ContactController::class, 'ContactUser'])->name('contact'); 
        Route::get('/contact-list', [ContactController::class, 'index'])->name('contact-list');
        Route::get('/contact-create', [ContactController::class, 'create'])->name('contact-create');
        Route::post('/contact-store', [ContactController::class, 'store'])->name('contact-store');
        Route::get('/contact-edit/{id}', [ContactController::class, 'edit'])->name('contact-edit');
        Route::post('/contact-update/{id}', [ContactController::class, 'update'])->name('contact-update');
        Route::get('/contact-delete/{id}', [ContactController::class, 'destroy'])->name('contact-delete');
  
        Route::get('/blog-list', [BlogController::class, 'index'])->name('blog-list');
        Route::get('/blog-create', [BlogController::class, 'create'])->name('blog-create');
        Route::post('/blog-store', [BlogController::class, 'store'])->name('blog-store');
        Route::get('/blog-edit/{id}', [BlogController::class, 'edit'])->name('blog-edit');
        Route::post('/blog-update/{id}', [BlogController::class, 'update'])->name('blog-update');
        Route::get('/blog-delete/{id}', [BlogController::class, 'destroy'])->name('blog-delete');
        Route::get('/userbolg', [BlogController::class, 'userBlog'])->name('userbolg'); 

        Route::get('/project-list', [ProjectController::class, 'index'])->name('project-list');
        Route::get('/project-create', [ProjectController::class, 'create'])->name('project-create');
        Route::post('/project-store', [ProjectController::class, 'store'])->name('project-store');
        Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('project-edit');
        Route::post('/project-update/{id}', [ProjectController::class, 'update'])->name('project-update');
        Route::get('/project-delete/{id}', [ProjectController::class, 'destroy'])->name('project-delete'); 

        Route::get('/subscriber-list', [SubscriberController::class, 'index'])->name('subscriber-list');
        Route::get('/subscriber-create', [SubscriberController::class, 'create'])->name('subscriber-create');
        Route::post('/subscriber-store', [SubscriberController::class, 'store'])->name('subscriber-store');
        Route::get('/subscriber-edit/{id}', [SubscriberController::class, 'edit'])->name('subscriber-edit');
        Route::post('/subscriber-update/{id}', [SubscriberController::class, 'update'])->name('subscriber-update');
        Route::get('/subscriber-delete/{id}', [SubscriberController::class, 'destroy'])->name('subscriber-delete');
        Route::get('/subscriber', [SubscriberController::class, 'Subscriber'])->name('subscriber');

       
        Route::get('/testg', [FrontController::class, 'testg'])->name('testg');

        // setting
        Route::get('/setting-logo-edit', [SettingController::class, 'edit'])->name('setting-logo-edit');
        Route::post('/setting-logo-update', [SettingController::class, 'update'])->name('setting-logo-update');
        Route::get('/setting-social-link-edit', [SettingController::class, 'socialEdit'])->name('setting-social-link-edit');
        Route::post('/setting-social-link-update/{id}', [SettingController::class, 'socialUpdate'])->name('setting-social-link-update');
        Route::get('/setting-footer-edit', [SettingController::class, 'footerEdit'])->name('setting-footer-edit');
        Route::post('/setting-footer-update', [SettingController::class, 'footerUpdate'])->name('setting-footer-update');
        Route::get('/setting-seo-edit', [SettingController::class, 'SEO'])->name('setting-seo-edit');
        Route::post('/setting-seo-update', [SettingController::class, 'SEOupdate'])->name('setting-seo-update');

        ////////files
        Route::get('/file-list/{id?}', [AlbumController::class, 'index'])->name('file-list');
        Route::get('/file-create', [AlbumController::class, 'create'])->name('file-create');
        Route::post('/file-store', [AlbumController::class, 'store'])->name('file-store');
         Route::get('/file-edit/{id}', [AlbumController::class, 'edit'])->name('file-edit'); 
        Route::post('/file-update/{id}', [AlbumController::class, 'update'])->name('file-update'); 
        Route::get('/file-delete/{id}', [AlbumController::class, 'destroy'])->name('file-delete');
        //////////
        

        Route::get('/file-segment-verify/{id}', [DevController::class, 'acrTestTest'])->name('file-segment-verify');
        Route::get('/album-segment-verify/{id}', [DevController::class, 'acrTestTest'])->name('album-segment-verify');
        Route::get('/file-segment-list/{id}', [AlbumTrackController::class, 'index'])->name('file-segment-list');        
        Route::get('/file-segment-delete/{album_id}/{id}', [AlbumTrackController::class, 'destroy'])->name('file-segment-delete'); 
      
    });
});
Route::get('/trial', [FrontController::class, 'Trial'])->name('trial');
//User Dashboard
//User Routes
Route::prefix('user')->group(function () { 
    Route::post('user-register', [UserController::class, 'store'])->name('user-register');
    Route::group(['middleware' => 'isUser'], function () {
        
        Route::get('/dashboard', [UserDshboardController::class, 'index'])->name('user-dashboard');
        Route::get('/album-list', [AlbumController::class, 'index'])->name('album-list');
        Route::get('/album-create', [AlbumController::class, 'create'])->name('album-create');
        Route::post('/album-store', [AlbumController::class, 'store'])->name('album-store');
        Route::get('/album-edit/{id}', [AlbumController::class, 'edit'])->name('album-edit');
        Route::post('/album-update/{id}', [AlbumController::class, 'update'])->name('album-update');
        Route::get('/album-delete/{id}', [AlbumController::class, 'destroy'])->name('album-delete');
        Route::get('/submtbolg', [AlbumController::class, 'submitBlog'])->name('userbolg');
        Route::get('/album-premium', [AlbumController::class, 'premiumData'])->name('album-premium');
        Route::get('/submitted', [AlbumController::class, 'submitData'])->name('submitted');
        Route::get('/album-premium-submit/{id}', [AlbumController::class, 'premiumSubmit'])->name('album-premium-submit');
        Route::get('/album-publish/{id}', [AlbumController::class, 'Publish'])->name('album-publish');
       
        Route::get('/album-submited-list', [AlbumController::class, 'userSubmitAlbum'])->name('album-submited-list');
        Route::get('/track-submited', [AlbumController::class, 'userSubmitTrack'])->name('track-submited');
        /////// album traks 
        Route::get('/album-track/{id}', [AlbumTrackController::class, 'albumTrack'])->name('album-track');
        Route::get('/album-track-create', [AlbumTrackController::class, 'create'])->name('album-track-create');
        Route::get('/album-track-edit/{id}', [AlbumTrackController::class, 'edit'])->name('album-track-edit');
        Route::post('/album-track-store', [AlbumTrackController::class, 'store'])->name('album-track-store');
        Route::post('/album-track-update/{id}', [AlbumTrackController::class, 'update'])->name('album-track-update');
        Route::get('/album-track-delete/{id}', [AlbumTrackController::class, 'destroy'])->name('album-track-delete');
      
    
        Route::get('/user-account', [UserController::class, 'accountUser'])->name('user-account');
        Route::post('/user-account-update/{id}', [UserController::class, 'accountUpdate'])->name('user-account-update');

        
    });
});