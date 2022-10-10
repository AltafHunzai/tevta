<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/AcadmicsAdmissions', [HomeController::class, 'AcadmicsAdmissions']);

Route::get('/schoolOfGbtevta', [HomeController::class, 'schoolOfGbtevta']);

Route::get('/serviceCenter', [HomeController::class, 'serviceCenter']);

Route::get('/researchPublication', [HomeController::class, 'researchPublication']);

Route::get('/financialSupport', [HomeController::class, 'financialSupport']);

Route::get('/rulesRegulation', [HomeController::class, 'rulesRegulation']);

Route::get('/faculty', [HomeController::class, 'faculty']);

Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/job', [HomeController::class, 'job']);

Route::get('/contactUs', [HomeController::class, 'contactus']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
});

// all routing below belongs to admin
// routing related to event
Route::get('/add_event_view', [AdminController::class, 'addevent']);
Route::post('/upload_Event', [AdminController::class, 'event']);
Route::get('/showevent', [AdminController::class, 'showevent']);
Route::get('/deleteevent/{id}', [AdminController::class, 'deleteevent']);
Route::get('/updateevent/{id}', [AdminController::class, 'updateevent']);
Route::post('/editEvent/{id}', [AdminController::class, 'editEvent']);

// routing related to courses
Route::get('/add_course_view', [AdminController::class, 'addcourse']);
Route::post('/upload_Course', [AdminController::class, 'course']);
Route::get('/showcourse', [AdminController::class, 'showcourse']);
Route::get('/deletecourse/{id}', [AdminController::class, 'deletecourse']);
Route::get('/updatecourse/{id}', [AdminController::class, 'updatecourse']);
Route::post('/editCourse/{id}', [AdminController::class, 'editCourse']);

// routing related to jobs
Route::get('/add_job_view', [AdminController::class, 'addjob']);
Route::post('/upload_Job', [AdminController::class, 'job']);
Route::get('/showjob', [AdminController::class, 'showjob']);
Route::get('/deletejob/{id}', [AdminController::class, 'deletejob']);
Route::get('/updatejob/{id}', [AdminController::class, 'updatejob']);
Route::post('/editJob/{id}', [AdminController::class, 'editJob']);

// routing related to blogs
Route::get('/add_blog_view', [AdminController::class, 'addblog']);
Route::post('/upload_Blog', [AdminController::class, 'blog']);
Route::get('/showblog', [AdminController::class, 'showblog']);
Route::get('/deleteblog/{id}', [AdminController::class, 'deleteblog']);
Route::get('/updateblog/{id}', [AdminController::class, 'updateblog']);
Route::post('/editBlog/{id}', [AdminController::class, 'editBlog']);

// routing related to registrationform
Route::get('/registrationform', [HomeController::class, 'addregistrationform']);
Route::post('/registrationform', [HomeController::class, 'registrationform']);
