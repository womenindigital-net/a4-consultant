<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstructorController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// admin route
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    //course
    Route::get('/course/list', [CourseController::class, 'index'])->name('course.list');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course/create/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/edit/{course_id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/course/update/{course_id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{course_id}', [CourseController::class, 'destroy'])->name('course.delete');
    //instructor
    Route::get('/instructor/list', [InstructorController::class, 'index'])->name('instructor.list');
    Route::get('/instructor/create', [InstructorController::class, 'create'])->name('instructor.create');
    Route::post('/instructor/create/store', [InstructorController::class, 'store'])->name('instructor.store');
    Route::get('/instructor/edit/{instructor_id}', [InstructorController::class, 'edit'])->name('instructor.edit');
    Route::put('/course/update/{course_id}', [CourseController::class, 'update'])->name('instructor.update');
    Route::get('/instructor/delete/{course_id}', [InstructorController::class, 'destroy'])->name('instructor.delete');
});
