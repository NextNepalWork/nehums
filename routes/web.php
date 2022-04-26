<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialSettingsController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;

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


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');

    Route::get('/social_settings', [SocialSettingsController::class, 'index'])->name('social');
    // Route::post('/social_settings', [SocialSettingsController::class, 'store'])->name('socialStore');
    Route::patch('/social_settings/edit/{id}', [SocialSettingsController::class, 'update'])->name('socialUpdate');
    Route::resource('/settings', SiteSettingsController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/products',ProductController::class);

    
    
    
    
    Route::get('/categories/update-status',[CategoryController::class,'update_status'])->name('category.update_status');
    Route::get('/categories/update-feature',[CategoryController::class,'update_feature'])->name('category.update_feature');
    
    Route::get('/blogs/update-status',[BlogController::class,'update_status'])->name('blog.update_status');
    Route::get('/banners/update-status',[BannerController::class,'update_status'])->name('banner.update_status');
    Route::get('/sliders/update-status',[SliderController::class,'update_status'])->name('slider.update_status');


    
    
    
    Route::resource('/blogs',BlogController::class);
    Route::post('ckeditor/upload', [CkeditorController::class,'upload'])->name('ckeditor.upload');
    Route::resource('/categories', CategoryController::class);

    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/events', EventController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/sliders', SliderController::class);
    Route::resource('/steps', StepController::class);
    Route::resource('/medias', MediaController::class);
	Route::resource('/pages', PageController::class);
	Route::resource('/gallery', GalleryController::class);
    Route::post('/gallery/photo',[GalleryController::class,'upload_photo'])->name('upload_photo');
    Route::post('/gallery/video',[GalleryController::class,'upload_video'])->name('upload_video');
    Route::delete('/photo/destroy/{id}', [GalleryController::class,'delete_photo'])->name('delete.photo');
    Route::delete('/video/destroy/{id}', [GalleryController::class,'delete_video'])->name('delete.video');

    Route::get('/newsletter', [NewsletterController::class,'index'])->name('newsletters.index');
	Route::post('/newsletter/send', [NewsletterController::class,'send'])->name('newsletters.send');

    Route::get('/message', [MessageController::class,'index'])->name('messages.index');
	Route::get('/message/{id}', [MessageController::class,'show'])->name('messages.show');
	Route::delete('/message/{id}', [MessageController::class,'delete'])->name('messages.destroy'); 
	Route::resource('/opportunity', OpportunityController::class);

    
});


Route::get('/auth/github/redirect',[SocialController::class,'githubRedirect'])->name('githubLogin');
Route::get('/auth/github/callback',[SocialController::class,'callback']);
 
// Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
// Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);
require __DIR__ . '/auth.php';


Route::get('/',[FrontendController::class,'index'])->name('home');