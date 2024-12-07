<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\EmployerController;

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
    return view('welcome');
});

Route::get('/register',[AuthController::class, 'registerform'])->name('register-form');
Route::post('/store',[AuthController::class, 'store'])->name('store');



Route::get('/login-form',[AuthController::class, 'loginform'])->name('login-form');
Route::middleware(['auth','role:admin'])->group (function(){
Route::get('/admin-dashboard',[AuthController::class, 'admindashboard'])->name('admin-dashboard');
});
Route::middleware(['auth','role:employer'])->group(function(){
Route::get('/employer-dashboard',[AuthController::class, 'employerdashboard'])->name('employer-dashboard');

});
Route::middleware(['auth','role:jobseeker'])->group(function(){
Route::get('/jobseeker-dashboard',[AuthController::class, 'jobseekerdashboard'])->name('jobseeker-dashboard');

});

Route::post('/login',[AuthController::class, 'login'])->name('login');




Route::get('/admin-dashboard',[AdminController::class, 'adminindex'])->name('admin-index');
Route::get('/view-post',[AdminController::class, 'viewpost'])->name('view-post');
Route::get('/employer-list',[AdminController::class, 'list'])->name('list');
Route::get('/approved-list',[AdminController::class, 'approvedlist'])->name('approved-list');
Route::get('/rejected-list',[AdminController::class, 'rejectedlist'])->name('rejected-list');






Route::get('/employer-dashboard',[EmployerController::class, 'employerindex'])->name('employer-index');
Route::get('/add-post',[EmployerController::class, 'addpost'])->name('add-post');
Route::get('/details',[EmployerController::class, 'details'])->name('details');
// Route::get('/status',[EmployerController::class, 'status'])->name('status');
Route::get('/approved-list',[EmployerController::class, 'approved'] )->name('approved-list');
Route::get('/short-listed',[EmployerController::class, 'shortlist'])->name('short-list');
// Route::get('/pending-list',[EmployerController::class, 'pending'])->name('pending list');
Route::get('/view-post',[EmployerController::class, 'view'])->name('view-post');












Route::get('/jobseeker-dashboard',[JobseekerController::class, 'jobseekerindex'])->name('jobseeker-dashboard');
Route::get('/jobseeker-status',[JobseekerController::class, 'jobseerekstatus'])->name('jobseeker-status');
Route::get('/apply-post',[JobseekerController::class, 'jobseekerform'])->name('apply-post');
Route::get('/view-post',[JobseekerController::class, 'viewpost'])->name('view-post');



