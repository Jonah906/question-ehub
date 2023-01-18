<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DepartmentController;

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
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('department', [FrontendController::class, 'department']);
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::post('/savecontact', [FrontendController::class, 'savecontact']);
Route::get('download/{que_slug}', [FrontendController::class, 'download']);
Route::get('department/{slug}', [FrontendController::class, 'viewdepartment']);
Route::get('department/{dept_slug}/{que_slug}', [FrontendController::class,'questionview']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('comments', CommentController::class);
Route::resource('questions', QuestionController::class);
Route::resource('backenddepts', DepartmentController::class);

