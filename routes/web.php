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
Route::get('clear', function () {
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
});


Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

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
    Route::get('/programs/update-status',[ProgramController::class,'update_status'])->name('program.update_status');

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
	// Route::resource('/gallery', GalleryController::class);

    Route::get('gallery/photo',[GalleryController::class,'index'])->name('photo.index');
    Route::get('gallery/video',[GalleryController::class,'index'])->name('video.index');
    Route::get('gallery/add-photo',[GalleryController::class,'create'])->name('photo.create');
    Route::get('gallery/add-video',[GalleryController::class,'create'])->name('video.create');
    Route::post('/gallery/photo',[GalleryController::class,'upload_photo'])->name('upload_photo');
    Route::post('/gallery/video',[GalleryController::class,'upload_video'])->name('upload_video');
    Route::delete('/photo/destroy/{id}', [GalleryController::class,'delete_photo'])->name('delete.photo');
    Route::delete('/video/destroy/{id}', [GalleryController::class,'delete_video'])->name('delete.video');

    Route::get('/newsletter', [NewsletterController::class,'index'])->name('newsletters.index');
	Route::post('/newsletter/send', [NewsletterController::class,'send'])->name('newsletters.send');


    Route::get('/contact', [MessageController::class,'index'])->name('messages.index');
	Route::get('/contact/{id}', [MessageController::class,'show'])->name('messages.show');
	Route::delete('/contact/{id}', [MessageController::class,'delete'])->name('messages.destroy'); 

    Route::get('/jobs', [MessageController::class,'index'])->name('job.index');
	Route::get('/jobs/{id}', [MessageController::class,'show'])->name('job.show');
	Route::delete('/jobs/{id}', [MessageController::class,'delete'])->name('job.destroy');

    Route::get('/volunteer', [MessageController::class,'index'])->name('volunteer.index');
	Route::get('/volunteer/{id}', [MessageController::class,'show'])->name('volunteer.show');
	Route::delete('/volunteer/{id}', [MessageController::class,'delete'])->name('volunteer.destroy');

    Route::get('/admission', [MessageController::class,'index'])->name('admission.index');
	Route::get('/admission/{id}', [MessageController::class,'show'])->name('admission.show');
	Route::delete('/admission/{id}', [MessageController::class,'delete'])->name('admission.destroy');

	Route::resource('/opportunity', OpportunityController::class);
	Route::resource('/programs', ProgramController::class);
    
});


Route::get('/auth/github/redirect',[SocialController::class,'githubRedirect'])->name('githubLogin');
Route::get('/auth/github/callback',[SocialController::class,'callback']);
 
// Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
// Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);
require __DIR__ . '/auth.php';


Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/programs',[FrontendController::class,'program'])->name('programs');
Route::get('/events',[FrontendController::class,'events'])->name('events');
Route::get('/events/{id}',[FrontendController::class,'event_detail'])->name('event.detail');
Route::get('/programs/{id}',[FrontendController::class,'program_detail'])->name('program.detail');
Route::get('/videos',[FrontendController::class,'video_gallery'])->name('videos');
Route::get('/photos',[FrontendController::class,'photo_gallery'])->name('photos');
Route::get('/teams',[FrontendController::class,'teams'])->name('teams');
Route::get('/team/{id}',[FrontendController::class,'team_detail'])->name('team.detail');

Route::get('/contact',[FrontendController::class,'contact'])->name('contact');

Route::post('/contact-us',[FrontendController::class,'contact_us'])->name('contact_us');
Route::get('/admission-procedure',[FrontendController::class,'admission'])->name('admission');
Route::get('/job-vacancy',[FrontendController::class,'job'])->name('job');
Route::get('/job-detail/{id}',[FrontendController::class,'job_detail'])->name('job-detail');
Route::get('/volunteer',[FrontendController::class,'volunteer'])->name('volunteer');
Route::get('/donate-us',[FrontendController::class,'donate'])->name('donate');
Route::post('/subscribers', [NewsletterController::class,'subscriber'])->name('subscriber');


Route::get('/media-coverages',[FrontendController::class,'mediaCoverages'])->name('media-coverages');
Route::get('/media-coverages/{id}',[FrontendController::class,'mediaCoveragesDetail'])->name('media-coverage.detail');
