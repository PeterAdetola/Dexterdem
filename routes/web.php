<?php

use App\AppHelpers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HeroController;
use App\Http\Controllers\Custom\InnerHeroController;
use App\Http\Controllers\Custom\AboutController;
use App\Http\Controllers\Custom\ServicesController;
use App\Http\Controllers\Custom\TeamController;
use App\Http\Controllers\Custom\StatController;
use App\Http\Controllers\Custom\FeatureController;
use App\Http\Controllers\Custom\ProjectController;
use App\Http\Controllers\Custom\TestimonialController;
use App\Http\Controllers\Custom\ClientController;
use App\Http\Controllers\Custom\ContactController;
use App\Http\Controllers\Custom\SocialMediaController;
use App\Http\Controllers\Custom\EnquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public/index/index');
})->name('home');

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------| Hero Routes |----------------------------------------
Route::controller(HeroController::class)->group(function () 
{
    Route::patch('/update/hero', 'UpdateHero')->name('update.hero');
});
Route::controller(InnerHeroController::class)->group(function () 
{
    Route::patch('/save/hero', 'SaveHero')->name('save.hero');
});

// --------------| About Routes |----------------------------------------
Route::controller(AboutController::class)->group(function () 
{
    Route::patch('/update/about_summary', 'UpdateAboutSummary')->name('update.about_summary');
// --------------| About non-admin Routes |----------------------------------------
    Route::get('/aboutus', 'AboutusPage')->name('aboutus.page');
});

// --------------| Services Routes |----------------------------------------
Route::controller(ServicesController::class)->group(function () 
{
    Route::get('/view/services', 'ViewServices')->name('view.services');
    Route::get('/create/service', 'CreateService')->name('create.service');
    Route::post('/store/service', 'SaveService')->name('save.service');
    Route::post('/sort/service', 'SortService')->name('sort.service');
    Route::post('/update/service', 'UpdateService')->name('update.service');
    Route::get('/edit/service/{id}', 'EditService')->name('edit.service');
    Route::post('/delete/service/{id}', 'DeleteService')->name('delete.service');

    Route::get('/view/services_extra', 'ViewServicesExtra')->name('view.services_extra');
    Route::post('/save/value', 'SaveValue')->name('save.value');
    Route::get('/edit/values', 'EditValues')->name('edit.values');
    Route::post('/sort/value', 'SortValue')->name('sort.value');
    Route::post('/save/process', 'SaveProcess')->name('save.process');
    Route::post('/delete/process/{id}', 'DeleteProcess')->name('delete.process');
    // Route::post('/store/service_img', 'SaveServiceImg')->name('save.service_img');
    // Route::post('/sort/service_imgs', 'SortServiceImgs')->name('sort.service_imgs');
    // Route::post('/update/service_imgs/{id}', 'UpdateServiceImages')->name('update.service_imgs');
    // Route::get('/edit/service_imgs/{id}', 'EditServiceImages')->name('edit.service_imgs');
    // Route::get('/delete/service_img/{id}', 'DeleteServiceImg')->name('delete.service_img');

// --------------| Service non-admin Routes |----------------------------------------
    Route::get('/services', 'ServicePage')->name('services.page');
    Route::get('/service/detailed/{id}', 'ServiceDetailedPage')->name('service_detailed.page');
});

// --------------| Project Routes |----------------------------------------
Route::controller(ProjectController::class)->group(function () 
{
    Route::get('/view/projects', 'ViewProjects')->name('view.projects');
    Route::get('/create/project', 'CreateProject')->name('create.project');
    Route::post('/store/project', 'SaveProject')->name('save.project');
    Route::post('/store/project_img', 'SaveProjectImg')->name('save.project_img');
    // Route::post('/sort/project', 'SortProject')->name('sort.project');
    Route::post('/sort/project_imgs', 'SortProjectImgs')->name('sort.project_imgs');
    Route::post('/update/project', 'UpdateProject')->name('update.project');
    Route::post('/update/project_imgs/{id}', 'UpdateProjectImages')->name('update.project_imgs');
    Route::get('/edit/project/{id}', 'EditProject')->name('edit.project');
    Route::get('/edit/project_imgs/{id}', 'EditProjectImages')->name('edit.project_imgs');
    Route::post('/delete/project/{id}', 'DeleteProject')->name('delete.project');
    Route::get('/delete/project_img/{id}', 'DeleteProjectImg')->name('delete.project_img');

    Route::get('/view/projects_extra', 'ViewProjectsExtra')->name('view.projects_extra');

// --------------| Project non-admin Routes |----------------------------------------
    Route::get('/projects', 'ProjectPage')->name('projects.page');
    Route::get('/project/detailed/{id}', 'ProjectDetailedPage')->name('project_detailed.page');
});

// --------------| Team Routes |----------------------------------------
Route::controller(TeamController::class)->group(function ()
{
    Route::get('/team/intro', 'ViewTeamIntro')->name('view.team_intro');
    Route::patch('/save/team_intro', 'SaveTeamIntro')->name('save.team_intro');
    Route::get('/view/members', 'ViewMembers')->name('view.members');
    Route::post('/store/member', 'SaveMember')->name('save.member');
    Route::post('/sort/member', 'SortMember')->name('sort.member');
    Route::post('/update/member', 'UpdateMember')->name('update.member');
    Route::get('/edit/member/{id}', 'EditMember')->name('edit.member');
    Route::post('/delete/member/{id}', 'DeleteMember')->name('delete.member');
});

// --------------| Stat Routes |----------------------------------------
Route::controller(StatController::class)->group(function () 
{
    Route::get('/view/stat', 'ViewStats')->name('view.stats');
    Route::post('/store/stat', 'SaveStat')->name('save.stat');
    Route::post('/sort/stat', 'SortStat')->name('sort.stat');
    Route::post('/update/stat', 'UpdateStat')->name('update.stat');
    Route::post('/delete/stat/{id}', 'DeleteStat')->name('delete.stat');
    // Route::post('/update/stat/{id}', 'UpdateStat')->name('update.stat');
    // Route::get('/edit/stat/{id}', 'EditStat')->name('edit.stat');
    // Route::post('/sort/project_imgs', 'SortProjectImgs')->name('sort.project_imgs');
});

// --------------| Feature Routes |----------------------------------------
Route::controller(FeatureController::class)->group(function ()
{
    Route::get('/view/features', 'ViewFeatures')->name('view.features');
    Route::post('/store/feature', 'SaveFeature')->name('save.feature');
    Route::post('/sort/feature', 'SortFeature')->name('sort.feature');
    // Route::post('/sort/project_imgs', 'SortProjectImgs')->name('sort.project_imgs');
    Route::post('/update/feature', 'UpdateFeature')->name('update.feature');
    Route::get('/edit/feature/{id}', 'EditFeature')->name('edit.feature');
    Route::post('/delete/feature/{id}', 'DeleteFeature')->name('delete.feature');
});

// --------------| Testimonial Routes |----------------------------------------
Route::controller(TestimonialController::class)->group(function ()
{
    Route::get('/view/testimonials', 'ViewTestimonials')->name('view.testimonials');
    Route::post('/store/testimonial', 'SaveTestimonial')->name('save.testimonial');
    Route::post('/sort/testimonial', 'SortTestimonial')->name('sort.testimonial');
    Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
    Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
    Route::post('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
    Route::post('/delete/testimonial_img/{id}', 'DeleteTestimonialImg')->name('delete.testimonial_img');
    Route::post('/add/testimonial_img/{id}', 'AddTestimonialImg')->name('add.testimonial_img');
});

// --------------| Client Routes |----------------------------------------
Route::controller(ClientController::class)->group(function ()
{
    Route::get('/view/clients', 'ViewClients')->name('view.clients');
    Route::post('/store/client', 'SaveClient')->name('save.client');
    Route::post('/sort/client', 'SortClient')->name('sort.client');
    Route::post('/update/client', 'UpdateClient')->name('update.client');
    Route::get('/edit/client/{id}', 'EditClient')->name('edit.client');
    Route::post('/delete/client/{id}', 'DeleteClient')->name('delete.client');
});

// --------------| Contact Routes |----------------------------------------
Route::controller(ContactController::class)->group(function ()
{
    Route::post('/store/contact', 'SaveContact')->name('save.contact');
    Route::post('/update/contact', 'UpdateContact')->name('update.contact');
    Route::get('/edit/contact/{id}', 'EditContact')->name('edit.contact');
    Route::get('/delete/contact/{id}', 'DeleteContact')->name('delete.contact');

    Route::get('/view/contact_extra', 'ViewContactExtra')->name('view.contact_extra');
// --------------| Contact non-admin Routes |----------------------------------------
    Route::get('/contact', 'ContactPage')->name('contact.page');
});
// --------------| Enquiry Routes |----------------------------------------
Route::controller(EnquiryController::class)->group(function ()
{
    Route::post('/send/enquiry', 'SendEnquiry')->name('send.enquiry');
    // Route::post('/email/feedback', 'EmailFeedback')->name('email.feedback');
});


// --------------| Social Media Routes |----------------------------------------
Route::controller(SocialMediaController::class)->group(function ()
{
    Route::post('/store/social_media', 'SaveSocialMedia')->name('save.social_media');
    Route::post('/sort/social_media', 'SortSocialMedia')->name('sort.social_media');
    Route::post('/update/social_media', 'UpdateSocialMedia')->name('update.social_media');
    Route::get('/edit/social_media/{id}', 'EditSocialMedia')->name('edit.social_media');
    Route::get('/delete/social_media/{id}', 'DeleteSocialMedia')->name('delete.social_media');
});


require __DIR__.'/auth.php';
