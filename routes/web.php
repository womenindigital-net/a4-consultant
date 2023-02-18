<?php

use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProfileController;

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
    return view('layouts.frontend.dashboard.master');
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
    Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
    Route::get('/course/details', [FrontendController::class, 'courseDetails'])->name('course.details');
    Route::get('/teachers', [FrontendController::class, 'teachers'])->name('teachers');
    Route::get('/stories', [FrontendController::class, 'stories'])->name('stories');
    Route::get('/clints', [FrontendController::class, 'clints'])->name('clints');
    Route::get('/news', [FrontendController::class, 'news'])->name('news');
    Route::get('/event/details', [FrontendController::class, 'eventDetails'])->name('event.details');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
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
});
