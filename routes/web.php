<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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
    return view('welcome');
});

Route::redirect('/anasayfa','/home')->name('profile');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function (){
    return view('home.index');
});

Route::get('/test/{id}',[HomeController::class, 'test'])->where('id', '[0-9]+')->name('test');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/service',[HomeController::class, 'service'])->name('service');
Route::get('/team',[HomeController::class, 'team'])->name('team');
Route::get('/portfolio',[HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/single',[HomeController::class, 'single'])->name('single');

//try

//admin
//Route::get('/admin', [AdminHomeController::class,'index'])->name('adminhome')->middleware('auth')
Route::get('/admin', [AdminHomeController::class,'index'])->name('adminhome');

Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [AdminHomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [AdminHomeController::class, 'logout'])->name('admin_logout');

//Route::middleware('auth')->prefix('admin')->group(function () {
// admin category

Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');

    Route::get('/', [AdminHomeController::class, 'index'])->name('admin_home');

    Route::get('category', [AdminHomeController::class, 'index'])->name('admin_category');
    Route::get('category/add', [AdminHomeController::class, 'add'])->name('admin_category_add');
    Route::get('category/update', [AdminHomeController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete', [AdminHomeController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [AdminHomeController::class, 'show'])->name('admin_category_show');


//});


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
