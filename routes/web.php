<?php

use App\Http\Controllers\LockScreen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Dashboard\MainDashboardController;



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
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('home', function () {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ----------------------------- dashboard all ------------------------------//
Route::get('student_dashboard', [MainDashboardController::class, 'student'])->name('student_dashboard');
Route::get('teacher_dashboard', [MainDashboardController::class, 'teacher'])->name('teacher_dashboard');
Route::get('parent_dashboard', [MainDashboardController::class, 'parent'])->name('parent_dashboard');


// -----------------------------login----------------------------------------//
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [UserManagementController::class, 'profile'])->name('profile_user');
Route::post('profile_user/store', [UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

// ----------------------------- form change password ------------------------------//
Route::get('change/password', [UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- student ------------------------------//
Route::get('all/student/list', [StudentController::class, 'list'])->name('all/student/list');
Route::get('add/student/new', [StudentController::class, 'formAdd'])->name('add/student/new');
Route::post('add/student/save', [StudentController::class, 'formSave'])->name('add/student/save');
Route::get('student/about', [StudentController::class, 'aboutStudent'])->name('student/about');
Route::get('student/edit/{id}', [StudentController::class, 'studentEdit'])->name('student/edit');
