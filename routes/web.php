<?php

use App\Models\Enroll;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EnrollController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\StoriesController;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\NewsAdnEventsController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Frontend\UserProfielController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;

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

Route::get('/', function () {
    return view('frontend.index');
});

// ================User Dashboard==================
Route::get('/dashboard', function () {
    return view('layouts.frontend.dashboard.user-dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ==============Admin Dashboard====================
Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// frontend

Route::namespace('frontend')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');
    Route::get('/service', [FrontendController::class, 'service'])->name('service');
    Route::get('/all-courses', [FrontendController::class, 'allCourses'])->name('all-courses');
    Route::get('/course/details/{course_id}', [FrontendController::class, 'courseDetails'])->name('course.details');
    Route::get('/teachers', [FrontendController::class, 'teachers'])->name('teachers');
    Route::get('/stories', [FrontendController::class, 'stories'])->name('stories');
    Route::get('/story/details/{story_id}', [FrontendController::class, 'storyDetails'])->name('story.details');
    Route::get('/clints', [FrontendController::class, 'clints'])->name('clints');
    Route::get('/news', [FrontendController::class, 'news'])->name('news');
    Route::get('/event/details/{newsEvent_id}', [FrontendController::class, 'eventDetails'])->name('event.details');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/profile', [FrontendController::class, 'userProfile'])->name('profile');
    // Route::get('/profile/update', [FrontendController::class, 'userProfileUpdate'])->name('user.profile.update');
    Route::get('/category/course/show/{id}', [FrontendController::class, 'courseShow'])->name('category.course.show');
    Route::get('/enroll/create/{course_id}', [EnrollController::class, 'enroll'])->name('enroll');
    Route::put('/user/update/{user_id}', [UserProfileController::class, 'profileUpdate'])->name('user.profile.update');
    Route::post('/user/change/password', [UserProfileController::class, 'changePassword'])->name('passwordChange');
    Route::get('/user/enroll/details', [EnrollController::class, 'enrollDetails'])->name('enroll.details');
    Route::get('/user/enroll/all-details/{enroll_id}', [EnrollController::class, 'allDetails'])->name('user.enroll.show');
    Route::get('/user/delete/{enroll_id}', [EnrollController::class, 'delete'])->name('user.enroll.delete');
});


// admin route
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    //course
    Route::get('/course/list', [CourseController::class, 'index'])->name('course.list');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course/create/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/edit/{course_id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/course/update/{course_id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{course_id}', [CourseController::class, 'destroy'])->name('course.delete');
    //course category
    Route::get('/course/category/list', [CourseCategoryController::class, 'index'])->name('course.category.list');
    Route::get('/course/category/create', [CourseCategoryController::class, 'create'])->name('course.category.create');
    Route::post('/course/category/create/store', [CourseCategoryController::class, 'store'])->name('course.category.store');
    Route::get('/course/category/edit/{course_id}', [CourseCategoryController::class, 'edit'])->name('course.category.edit');
    Route::put('/course/category/update/{course_id}', [CourseCategoryController::class, 'update'])->name('course.category.update');
    Route::get('/course/category/delete/{course_id}', [CourseCategoryController::class, 'destroy'])->name('course.category.delete');
    // service category
    Route::get('/service/category/list', [ServiceCategoryController::class, 'index'])->name('service.category.list');
    Route::get('/service/category/create', [ServiceCategoryController::class, 'create'])->name('service.category.create');
    Route::post('/service/category/create/store', [ServiceCategoryController::class, 'store'])->name('service.category.store');
    Route::get('/service/category/edit/{service_id}', [ServiceCategoryController::class, 'edit'])->name('service.category.edit');
    Route::put('/service/category/update/{service_id}', [ServiceCategoryController::class, 'update'])->name('service.category.update');
    Route::get('/service/category/delete/{service_id}', [ServiceCategoryController::class, 'destroy'])->name('service.category.delete');

    // service category
    Route::get('/service/list', [ServiceController::class, 'index'])->name('service.list');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/create/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{service_id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/service/update/{service_id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{service_id}', [ServiceController::class, 'destroy'])->name('service.delete');

    //instructor
    Route::get('/instructor/list', [InstructorController::class, 'index'])->name('instructor.list');
    Route::get('/instructor/create', [InstructorController::class, 'create'])->name('instructor.create');
    Route::post('/instructor/create/store', [InstructorController::class, 'store'])->name('instructor.store');
    Route::get('/instructor/edit/{instructor_id}', [InstructorController::class, 'edit'])->name('instructor.edit');
    Route::put('/instructor/update/{instructor_id}', [InstructorController::class, 'update'])->name('instructor.update');
    Route::get('/instructor/delete/{course_id}', [InstructorController::class, 'destroy'])->name('instructor.delete');
    //slider
    Route::get('/slider/list', [SliderController::class, 'index'])->name('slider.list');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/create/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{slider_id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/update/{slider_id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{slider_id}', [SliderController::class, 'destroy'])->name('slider.delete');
    //consultant
    Route::get('/consultant/list', [ConsultantController::class, 'index'])->name('consultant.list');
    Route::get('/consultant/create', [ConsultantController::class, 'create'])->name('consultant.create');
    Route::post('/consultant/create/store', [ConsultantController::class, 'store'])->name('consultant.store');
    Route::get('/consultant/edit/{consultant_id}', [ConsultantController::class, 'edit'])->name('consultant.edit');
    Route::put('/consultant/update/{consultant_id}', [ConsultantController::class, 'update'])->name('consultant.update');
    Route::get('/consultant/delete/{consultant_id}', [ConsultantController::class, 'destroy'])->name('consultant.delete');
    //stories
    Route::get('/stories/list', [StoriesController::class, 'index'])->name('stories.list');
    Route::get('/stories/create', [StoriesController::class, 'create'])->name('stories.create');
    Route::post('/stories/create/store', [StoriesController::class, 'store'])->name('stories.store');
    Route::get('/stories/edit/{stories_id}', [StoriesController::class, 'edit'])->name('stories.edit');
    Route::put('/stories/update/{stories_id}', [StoriesController::class, 'update'])->name('stories.update');
    Route::get('/stories/delete/{stories_id}', [StoriesController::class, 'destroy'])->name('stories.delete');
    //news and event
    Route::get('/event/list', [NewsAdnEventsController::class, 'index'])->name('event.list');
    Route::get('/event/create', [NewsAdnEventsController::class, 'create'])->name('event.create');
    Route::post('/event/create/store', [NewsAdnEventsController::class, 'store'])->name('event.store');
    Route::get('/event/edit/{event_id}', [NewsAdnEventsController::class, 'edit'])->name('event.edit');
    Route::put('/event/update/{event_id}', [NewsAdnEventsController::class, 'update'])->name('event.update');
    Route::get('/event/delete/{event_id}', [NewsAdnEventsController::class, 'destroy'])->name('event.delete');
    //Client
    Route::get('/client/list', [ClientController::class, 'index'])->name('client.list');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/create/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/edit/{client_id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/client/update/{client_id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/delete/{client_id}', [ClientController::class, 'destroy'])->name('client.delete');
    //Contact
    Route::get('/contact/list', [ContactController::class, 'index'])->name('contact.list');
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact/create/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/edit/{client_id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/update/{client_id}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/delete/{client_id}', [ContactController::class, 'destroy'])->name('contact.delete');
    // about
    Route::get('/aboutus/list', [AboutController::class, 'index'])->name('aboutus.list');
    Route::get('/aboutus/create', [AboutController::class, 'create'])->name('aboutus.create');
    Route::post('/aboutus/create/store', [AboutController::class, 'store'])->name('aboutus.store');
    Route::get('/aboutus/edit/{client_id}', [AboutController::class, 'edit'])->name('aboutus.edit');
    Route::put('/aboutus/{client_id}', [AboutController::class, 'update'])->name('aboutus.update');
    Route::get('/aboutus/{client_id}', [AboutController::class, 'destroy'])->name('aboutus.delete');
    //enroll
    Route::get('/enroll/list', [EnrollController::class, 'index'])->name('enroll.list');
    Route::get('/enroll/show/{enroll_id}', [EnrollController::class, 'show'])->name('enroll.show');
    Route::get('/enroll/update/{enroll_id}', [EnrollController::class, 'update'])->name('enroll.update');
    Route::get('/enroll/delete/{enroll_id}', [EnrollController::class, 'delete'])->name('enroll.delete');
});
